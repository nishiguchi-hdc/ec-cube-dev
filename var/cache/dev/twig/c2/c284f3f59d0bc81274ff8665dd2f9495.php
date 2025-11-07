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

/* @admin/Store/plugin_confirm.twig */
class __TwigTemplate_b7733597d0be022fb70450b67d4443d9 extends Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm.twig"));

        // line 13
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo "    ";
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title.upgrade"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.subtitle"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_install");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
        echo "\", ctx.plugin);
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_upgrade");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_schema_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance_update"]);
        echo "\", ctx.plugin);
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「";
        // line 104
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, true, 104), 104, $this->source), "js"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "version", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo ")」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「";
        // line 109
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "name", [], "any", false, false, true, 109), 109, $this->source), "js"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "version", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo ")」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = ";
        // line 119
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 119, $this->source); })()), 119, $this->source));
        echo ";
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 123, $this->source); })()), "code", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "', 'version': '";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 123, $this->source); })()), "version", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            ";
        // line 152
        if (((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 152, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 152, $this->source); })()), "enabled", [], "any", false, false, true, 152))) {
            // line 153
            echo "                message_text += 'プラグイン一覧より有効化を行って下さい。';
            ";
        }
        // line 155
        echo "            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 179
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 180
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            ";
        // line 186
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 186, $this->source); })())) {
            // line 187
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header.upgrade"), "html", null, true);
            echo "
                            ";
        } else {
            // line 189
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header"), "html", null, true);
            echo "
                            ";
        }
        // line 191
        echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        ";
        // line 195
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_confirm_panel.twig");
        echo "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-end\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                ";
        // line 201
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 201, $this->source); })())) {
            // line 202
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, true, 203), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\"
                                            data-disable-url=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 204, $this->source); })()), "id", [], "any", false, false, true, 204), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.upgrade"), "html", null, true);
            echo "</button>
                                ";
        } else {
            // line 206
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"install\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
            echo "</button>
                                ";
        }
        // line 208
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 213
        if ((((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 213, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 213, $this->source); })())) > 0))) {
            // line 214
            echo "                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.require.header", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 216, $this->source); })()), "name", [], "any", false, false, true, 216)]), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 219, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 220
                echo "                            <ul>
                                <li>";
                // line 221
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "versions", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "</li>
                            </ul>
                            ";
                // line 224
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                    </div>
                </div>
                ";
        }
        // line 228
        echo "            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-end small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm.twig";
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
        return array (  494 => 256,  489 => 254,  461 => 228,  456 => 225,  450 => 224,  443 => 221,  440 => 220,  436 => 219,  430 => 216,  426 => 214,  424 => 213,  417 => 208,  411 => 206,  404 => 204,  400 => 203,  397 => 202,  395 => 201,  391 => 200,  383 => 195,  377 => 191,  371 => 189,  365 => 187,  363 => 186,  355 => 180,  345 => 179,  313 => 155,  309 => 153,  307 => 152,  273 => 123,  266 => 119,  251 => 109,  241 => 104,  223 => 89,  213 => 82,  202 => 74,  191 => 66,  169 => 47,  159 => 40,  144 => 27,  134 => 26,  121 => 23,  111 => 22,  97 => 19,  91 => 17,  88 => 16,  78 => 15,  67 => 11,  65 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}
    {% if is_update %}
        {{'admin.store.plugin_confirm.title.upgrade'|trans}}
    {% else %}
        {{'admin.store.plugin_confirm.title'|trans}}
    {% endif %}
{% endblock %}
{% block sub_title %}
    {{'admin.store.plugin_confirm.subtitle'|trans}}
{% endblock %}

{% block javascript %}
<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_install') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"{{ url('admin_disable_maintenance', { 'mode': 'auto_maintenance' }) }}\", ctx.plugin);
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_upgrade') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_schema_update') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_update') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    // メンテナンスモード解除
                    return \$.post(\"{{ url('admin_disable_maintenance', { 'mode': 'auto_maintenance_update' }) }}\", ctx.plugin);
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「{{ item.name|escape('js') }} ({{ item.version }})」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「{{ item.name|escape('js') }} ({{ item.version }})」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = {{ requires|json_encode|raw }};
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '{{ item.code }}', 'version': '{{ item.version }}'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            {% if is_update and Plugin.enabled %}
                message_text += 'プラグイン一覧より有効化を行って下さい。';
            {% endif %}
            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            {% if is_update %}
                                {{ 'admin.store.plugin_confirm.header.upgrade'|trans }}
                            {% else %}
                                {{'admin.store.plugin_confirm.header'|trans}}
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        {{ include('@admin/Store/plugin_confirm_panel.twig') }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-end\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">{{ 'admin.common.cancel'|trans }}</button>
                                {% if is_update %}
                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"{{ url('admin_store_plugin_enable', { id: Plugin.id , maintenance_mode: constant('Eccube\\\\Service\\\\SystemService::AUTO_MAINTENANCE_UPDATE')}) }}\"
                                            data-disable-url=\"{{ url('admin_store_plugin_disable', { id: Plugin.id , maintenance_mode: constant('Eccube\\\\Service\\\\SystemService::AUTO_MAINTENANCE_UPDATE')}) }}\">{{ 'admin.store.plugin.upgrade'|trans }}</button>
                                {% else %}
                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#installModal\" data-mode=\"install\">{{ 'admin.store.plugin.install'|trans }}</button>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {% if is_update == false and requires|length > 0 %}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">{{ 'admin.store.plugin_confirm.require.header'|trans({'%name%': item.name}) }}</span>
                    </div>
                    <div class=\"card-body\">
                        {% for plugin in requires %}
                            <ul>
                                <li>{{ plugin.description }} {{ plugin.versions }}</li>
                            </ul>
                            {#{% include '@admin/Store/plugin_confirm_panel.twig' with {'item': plugin, 'is_update': is_update} only %}#}
                        {% endfor %}
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-end small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"{{ url('admin_store_plugin') }}\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Store/plugin_confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 16, "for" => 219);
        static $filters = array("escape" => 17, "trans" => 17, "raw" => 119, "json_encode" => 119, "length" => 213);
        static $functions = array("url" => 40, "include" => 195, "constant" => 203);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'raw', 'json_encode', 'length'],
                ['url', 'include', 'constant']
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
