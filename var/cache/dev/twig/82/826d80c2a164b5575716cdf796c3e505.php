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

/* @admin/Store/plugin_table.twig */
class __TwigTemplate_87c851b87f93b7ce0aa344bd0f076aca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table.twig"));

        // line 11
        echo "<script>
\$(function() {
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.887"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.888"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.889"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.890"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 34
                echo "                ";
                $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["plugin_forms"]) || array_key_exists("plugin_forms", $context) ? $context["plugin_forms"] : (function () { throw new RuntimeError('Variable "plugin_forms" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 34), [], "array", false, false, true, 34);
                // line 35
                echo "                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
                // line 36
                echo "                <form id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, true, 36), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, true, 36), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 38) == false)) {
                    echo "active";
                }
                echo "\">
                        <td class=\"align-middle ps-3\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
                        </td>
                        <td class=\"align-middle\">";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</td>
                        <td class=\"align-middle\">";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "
                            ";
                // line 45
                echo "                            ";
                // line 51
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 53)) {
                    // line 54
                    echo "                                <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 56
                    echo "                                <span class=\"text-secondary\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 58
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, true, 60) == 0)) {
                    // line 61
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "_token", [], "any", false, false, true, 61), 61, $this->source), 'widget');
                    echo "
                                ";
                    // line 62
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "plugin_id", [], "any", false, false, true, 62), 62, $this->source), 'widget');
                    echo "
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "plugin_archive", [], "any", false, false, true, 63), 63, $this->source), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
                    echo "
                                ";
                    // line 64
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "plugin_archive", [], "any", false, false, true, 64), 64, $this->source), 'errors');
                    echo "

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 67)]), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, true, 67), "name", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                    echo "');\">
                                    ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.898"), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 71
                echo "                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 float-end text-center\">
                                <div class=\"row\">
                                        ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 75) == false)) {
                    // line 76
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-bs-toggle=\"modal\"
                                               data-bs-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 80)]), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 85
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 87)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.903"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                } else {
                    // line 94
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 95)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.902"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 102
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 102), [], "array", true, true, true, 102)) {
                    // line 103
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href='";
                    // line 104
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["configPages"]) || array_key_exists("configPages", $context) ? $context["configPages"] : (function () { throw new RuntimeError('Variable "configPages" does not exist.', 104, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 104), [], "array", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo "'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\" title=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.891"), "html", null, true);
                    echo "\"></i></a>
                                        </div>
                                        ";
                }
                // line 110
                echo "                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 120
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.900"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 126
        echo "
<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
                <button class=\"btn-close\" type=\"button\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">
                    ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-bs-dismiss=\"modal\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                </button>
                <a href=\"#\" ";
        // line 148
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                </a>
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
        return "@admin/Store/plugin_table.twig";
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
        return array (  341 => 152,  334 => 148,  329 => 146,  322 => 142,  311 => 134,  301 => 126,  294 => 122,  290 => 120,  284 => 116,  273 => 110,  267 => 107,  261 => 104,  258 => 103,  255 => 102,  248 => 98,  240 => 95,  237 => 94,  230 => 90,  222 => 87,  219 => 86,  216 => 85,  208 => 80,  202 => 76,  200 => 75,  194 => 71,  188 => 68,  182 => 67,  176 => 64,  172 => 63,  168 => 62,  163 => 61,  161 => 60,  157 => 58,  151 => 56,  145 => 54,  143 => 53,  139 => 51,  137 => 45,  133 => 43,  129 => 42,  124 => 40,  117 => 38,  109 => 36,  106 => 35,  103 => 34,  99 => 33,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  69 => 20,  67 => 19,  57 => 11,);
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
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
{% if Plugins|length > 0 %}
    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">{{ 'admin.store.plugin_table.887'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.888'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.889'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.890'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for Plugin in Plugins %}
                {% set form = plugin_forms[Plugin.id] %}
                {% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
                <form id=\"{{ form.vars.name }}\" name=\"{{ form.vars.name }}\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                        <td class=\"align-middle ps-3\">
                            {{ Plugin.name }}
                        </td>
                        <td class=\"align-middle\">{{ Plugin.version }}</td>
                        <td class=\"align-middle\">{{ Plugin.code }}
                            {#TODO: readme of plugin #}
                            {#{% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                <br>
                                <a href=\"#\" class=\"view_readme\" data-bs-toggle=\"modal\" data-bs-target=\"#readmeModal\"
                                   data-name=\"{{ Plugin.name }}\"
                                   data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme') }}\">{{ 'admin.store.plugin_table.897'|trans }}</a>
                            {% endif %}#}
                        </td>
                        <td class=\"align-middle\">
                            {% if Plugin.enabled %}
                                <span class=\"text-success\">{{ 'common.enabled'|trans }}</span>
                            {% else %}
                                <span class=\"text-secondary\">{{ 'common.disabled'|trans }}</span>
                            {% endif %}
                        </td>
                        <td class=\"align-middle\">
                            {% if Plugin.source == 0 %}
                                {{ form_widget(form._token) }}
                                {{ form_widget(form.plugin_id) }}
                                {{ form_widget(form.plugin_archive, {'attr': {'accept': 'application/zip,application/x-tar,application/x-gzip'}}) }}
                                {{ form_errors(form.plugin_archive) }}

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('{{ url('admin_store_plugin_update', { id : Plugin.id }) }}', '{{ form.vars.name }}');\">
                                    {{ 'admin.store.plugin_table.898'|trans }}
                                </button>
                            {% endif %}
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 float-end text-center\">
                                <div class=\"row\">
                                        {% if Plugin.enabled == false %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-bs-toggle=\"modal\"
                                               data-bs-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"{{ url('admin_store_plugin_uninstall', { id : Plugin.id }) }}\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        {% endif %}
                                        {% if Plugin.enabled %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table.903'|trans }}\"></i>
                                            </a>
                                        </div>
                                        {% else %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table.902'|trans }}\"></i>
                                            </a>
                                        </div>
                                        {% endif %}
                                        {% if configPages[Plugin.code] is defined %}
                                        <div class=\"col-6 px-0\">
                                            <a href='{{ configPages[Plugin.code] }}'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\" title=\"{{ 'admin.store.plugin_table.891'|trans }}\"></i></a>
                                        </div>
                                        {% endif %}
                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% else %}
    <div class=\"card-body\">
        <div class=\"text-danger\">
            {{ 'admin.store.plugin_table.900'|trans }}
        </div>
    </div>
{% endif %}

<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    {{ 'admin.store.plugin.popup.delete.confirm.title'|trans }}</h5>
                <button class=\"btn-close\" type=\"button\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">
                    {{ 'admin.store.plugin.popup.delete.confirm.message'|trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                </button>
                <a href=\"#\" {{ csrf_token_for_anchor() }}
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    {{ 'admin.common.delete'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>
", "@admin/Store/plugin_table.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_table.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 33, "set" => 34, "form_theme" => 35);
        static $filters = array("length" => 19, "escape" => 24, "trans" => 24);
        static $functions = array("form_widget" => 61, "form_errors" => 64, "url" => 67, "csrf_token_for_anchor" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'form_theme'],
                ['length', 'escape', 'trans'],
                ['form_widget', 'form_errors', 'url', 'csrf_token_for_anchor']
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
