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

/* @admin/Store/plugin_table_official.twig */
class __TwigTemplate_b21e75ce3ba8df63e313a26ecb212471 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table_official.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table_official.twig"));

        // line 11
        echo "<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                \$.post(\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
        echo "\").then(function() {
                    message.text('削除が完了しました。');
                    \$('#deleteLog').text(data.log);
                    \$('#deleteLogPane').show();
                    progress.hide();
                    footer.show().find('button').toggle();
                });
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            }
        );
    });

    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["eccube.admin.disable_maintenance"], "method", false, false, true, 49)) {
            // line 50
            echo "        // メンテナンスモード解除
        \$.post(\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_disable_maintenance", ["mode" => "auto_maintenance"]);
            echo "\");
    ";
        }
        // line 53
        echo "});
</script>
";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 55, $this->source); })())) > 0)) {
            // line 56
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.905"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["Plugin"]) {
                // line 70
                echo "                ";
                $context["pluginDetail"] = ((twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", true, true, true, 70)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", false, false, true, 70), 70, $this->source), null)) : (null));
                // line 71
                echo "                <tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 71) == false)) {
                    echo "active";
                }
                echo "\">
                    <td class=\"align-middle\">
                        <div class=\"align-center-items ps-3 d-flex\">
                            <a href=\"#\" target=\"_blank\" class=\"plugin-image pe-3 d-block float-start\">
                                <img height=\"60\" src=\"";
                // line 75
                echo twig_escape_filter($this->env, (((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 75, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, true, 75)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
                echo "\" alt=\"\">
                            </a>
                            <span>";
                // line 77
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</span>
                        </div>
                    </td>
                    <td class=\"align-middle\">";
                // line 80
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "</p></td>
                    <td class=\"align-middle\">
                        ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 83)) {
                    // line 84
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 84)) {
                        // line 85
                        echo "                                <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                        echo "</span>
                            ";
                    } else {
                        // line 87
                        echo "                                <span class=\"text-secondary\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 89
                    echo "                        ";
                }
                // line 90
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 92
                if ((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 92, $this->source); })())) {
                    // line 93
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 93)) {
                        // line 94
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 94, $this->source); })()), "update_status", [], "any", false, false, true, 94) == 3)) {
                            // line 95
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_update_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 95)]), "html", null, true);
                            echo "\"
                                       class=\"btn btn-ec-regular\">";
                            // line 96
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.916"), "html", null, true);
                            echo "</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">";
                            // line 98
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.917", ["%version%" => twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 98, $this->source); })()), "version", [], "any", false, false, true, 98)]), "html", null, true);
                            echo "</li>
                                        <li class=\"plugin-version\">
                                            ";
                            // line 100
                            $context["versions"] = "";
                            // line 101
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 101, $this->source); })()), "supported_versions", [], "any", false, false, true, 101));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                                // line 102
                                echo "                                                ";
                                $context["versions"] = ($this->sandbox->ensureToStringAllowed((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 102, $this->source); })()), 102, $this->source) . $this->sandbox->ensureToStringAllowed($context["version"], 102, $this->source));
                                // line 103
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 103) == false)) {
                                    $context["versions"] = ($this->sandbox->ensureToStringAllowed((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 103, $this->source); })()), 103, $this->source) . ",");
                                }
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 105
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.918", ["%versions%" => (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 105, $this->source); })())]), "html", null, true);
                            echo "
                                        </li>
                                        <li class=\"plugin-update\">";
                            // line 107
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.919", ["%update_date%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 107, $this->source); })()), "update_date", [], "any", false, false, true, 107), 107, $this->source))]), "html", null, true);
                            echo "</li>
                                    </ul>
                                ";
                        } else {
                            // line 110
                            echo "                                    <p class=\"mb-0\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.920"), "html", null, true);
                            echo "。</p>
                                ";
                        }
                        // line 112
                        echo "                            ";
                    } else {
                        // line 113
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, true, 113)]), "html", null, true);
                        echo "\" class=\"btn btn-ec-regular\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 115
                    echo "                        ";
                }
                // line 116
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 118)) {
                    // line 119
                    echo "                            <div class=\"row m-0\">
                                <div class=\"col-4\">
                                    ";
                    // line 121
                    if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 121) == false)) {
                        // line 122
                        echo "                                        <a href=\"#\"
                                           data-bs-toggle=\"modal\"
                                           data-bs-target=\"#officialPluginDeleteModal\"
                                           data-id=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo "\"
                                           data-delete-url=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 126)]), "html", null, true);
                        echo "\"
                                           data-name=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                        echo "\"
                                           data-version=\"";
                        // line 128
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                        echo "\"
                                           class=\"btn btn-ec-actionIcon\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                        echo "\"></i>
                                        </a>

                                    ";
                    }
                    // line 134
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 136
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 136)) {
                        // line 137
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 137)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 141
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.925"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    } else {
                        // line 144
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 144)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.924"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 151
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 153
                    if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 153), [], "array", true, true, true, 153)) {
                        // line 154
                        echo "                                        <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["configPages"]) || array_key_exists("configPages", $context) ? $context["configPages"] : (function () { throw new RuntimeError('Variable "configPages" does not exist.', 154, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 154), [], "array", false, false, true, 154), 154, $this->source), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"";
                        // line 156
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.906"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 159
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 162
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 168
            if ((twig_length_filter($this->env, (isset($context["officialPluginsDetail"]) || array_key_exists("officialPluginsDetail", $context) ? $context["officialPluginsDetail"] : (function () { throw new RuntimeError('Variable "officialPluginsDetail" does not exist.', 168, $this->source); })())) == 0)) {
                // line 169
                echo "        <p class=\"ml-3\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.help"), "html", null, true);
                echo "</p>
    ";
            }
        } else {
            // line 172
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.923"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 178
        echo "
<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_table_official.twig";
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
        return array (  471 => 202,  467 => 201,  452 => 189,  446 => 186,  436 => 178,  429 => 174,  425 => 172,  418 => 169,  416 => 168,  411 => 165,  403 => 162,  398 => 159,  392 => 156,  386 => 154,  384 => 153,  380 => 151,  374 => 148,  364 => 144,  358 => 141,  348 => 137,  346 => 136,  342 => 134,  335 => 130,  330 => 128,  326 => 127,  322 => 126,  318 => 125,  313 => 122,  311 => 121,  307 => 119,  305 => 118,  301 => 116,  298 => 115,  290 => 113,  287 => 112,  281 => 110,  275 => 107,  269 => 105,  253 => 103,  250 => 102,  232 => 101,  230 => 100,  225 => 98,  220 => 96,  215 => 95,  212 => 94,  209 => 93,  207 => 92,  203 => 90,  200 => 89,  194 => 87,  188 => 85,  185 => 84,  183 => 83,  178 => 81,  174 => 80,  168 => 77,  163 => 75,  153 => 71,  150 => 70,  146 => 69,  138 => 64,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  116 => 56,  114 => 55,  110 => 53,  105 => 51,  102 => 50,  100 => 49,  73 => 25,  57 => 11,);
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
<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                \$.post(\"{{ url('admin_disable_maintenance', { 'mode': 'auto_maintenance' }) }}\").then(function() {
                    message.text('削除が完了しました。');
                    \$('#deleteLog').text(data.log);
                    \$('#deleteLogPane').show();
                    progress.hide();
                    footer.show().find('button').toggle();
                });
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            }
        );
    });

    {% if app.flashes('eccube.admin.disable_maintenance') %}
        // メンテナンスモード解除
        \$.post(\"{{ url('admin_disable_maintenance', { 'mode': 'auto_maintenance' }) }}\");
    {% endif %}
});
</script>
{% if Plugins|length > 0 %}
    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.942'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.943'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.905'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for key,Plugin in Plugins %}
                {% set pluginDetail = officialPluginsDetail[key]|default(NULL) %}
                <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                    <td class=\"align-middle\">
                        <div class=\"align-center-items ps-3 d-flex\">
                            <a href=\"#\" target=\"_blank\" class=\"plugin-image pe-3 d-block float-start\">
                                <img height=\"60\" src=\"{{ pluginDetail ? pluginDetail.image : asset('noimage_plugin_list.png', 'save_image') }}\" alt=\"\">
                            </a>
                            <span>{{ Plugin.name }}</span>
                        </div>
                    </td>
                    <td class=\"align-middle\">{{ Plugin.version }}</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">{{ Plugin.code }}</p></td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            {% if Plugin.enabled %}
                                <span class=\"text-success\">{{ 'common.enabled'|trans }}</span>
                            {% else %}
                                <span class=\"text-secondary\">{{ 'common.disabled'|trans }}</span>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if pluginDetail %}
                            {% if Plugin.id %}
                                {% if pluginDetail.update_status == 3 %}
                                    <a href=\"{{ url('admin_store_plugin_update_confirm', {'id': Plugin.id}) }}\"
                                       class=\"btn btn-ec-regular\">{{ 'admin.store.plugin_table_official.916'|trans }}</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">{{ 'admin.store.plugin_table_official.917'|trans({'%version%' : pluginDetail.version}) }}</li>
                                        <li class=\"plugin-version\">
                                            {% set versions = '' %}
                                            {% for version in pluginDetail.supported_versions %}
                                                {% set versions = versions ~ version %}
                                                {%- if loop.last == false%}{% set versions = versions ~ ',' %}{% endif -%}
                                            {% endfor %}
                                            {{ 'admin.store.plugin_table_official.918'|trans({'%versions%' : versions}) }}
                                        </li>
                                        <li class=\"plugin-update\">{{ 'admin.store.plugin_table_official.919'|trans({'%update_date%' : pluginDetail.update_date|time_ago}) }}</li>
                                    </ul>
                                {% else %}
                                    <p class=\"mb-0\">{{ 'admin.store.plugin_table_official.920'|trans }}。</p>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': Plugin.source}) }}\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.install'|trans }}</a>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            <div class=\"row m-0\">
                                <div class=\"col-4\">
                                    {% if Plugin.enabled == false %}
                                        <a href=\"#\"
                                           data-bs-toggle=\"modal\"
                                           data-bs-target=\"#officialPluginDeleteModal\"
                                           data-id=\"{{ Plugin.id }}\"
                                           data-delete-url=\"{{ url('admin_store_plugin_api_uninstall', { id: Plugin.id }) }}\"
                                           data-name=\"{{ Plugin.name }}\"
                                           data-version=\"{{ Plugin.version }}\"
                                           class=\"btn btn-ec-actionIcon\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\"></i>
                                        </a>

                                    {% endif %}
                                </div>
                                <div class=\"col-4\">
                                    {% if Plugin.enabled %}
                                        <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.925'|trans }}\"></i>
                                        </a>
                                    {% else %}
                                        <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.924'|trans }}\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                                <div class=\"col-4\">
                                    {% if configPages[Plugin.code] is defined %}
                                        <a class=\"btn btn-ec-actionIcon\" href=\"{{ configPages[Plugin.code] }}\">
                                            <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.906'|trans }}\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if officialPluginsDetail|length == 0 %}
        <p class=\"ml-3\">{{ 'admin.store.plugin.help'|trans }}</p>
    {% endif %}
{% else %}
    <div class=\"card-body\">
        <div class=\"text-danger\">
            {{ 'admin.store.plugin_table_official.923'|trans }}
        </div>
    </div>
{% endif %}

<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    {{ 'admin.store.plugin.popup.delete.confirm.title'|trans }}</h5>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">{{ 'admin.store.plugin.popup.delete.confirm.message'|trans }}</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-bs-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">{{ 'admin.common.delete'|trans }}</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
", "@admin/Store/plugin_table_official.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_table_official.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49, "for" => 69, "set" => 70);
        static $filters = array("length" => 55, "escape" => 60, "trans" => 60, "default" => 70, "time_ago" => 107);
        static $functions = array("url" => 25, "asset" => 75, "csrf_token_for_anchor" => 137);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape', 'trans', 'default', 'time_ago'],
                ['url', 'asset', 'csrf_token_for_anchor']
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
