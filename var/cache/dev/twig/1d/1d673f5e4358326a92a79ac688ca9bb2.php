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

/* @admin/Store/unregisterd_plugin_table.twig */
class __TwigTemplate_2f5ee362516ec1fa81fa0abcb0943679 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/unregisterd_plugin_table.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/unregisterd_plugin_table.twig"));

        // line 11
        echo "<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.941"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.944"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.945"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
            // line 24
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" method=\"post\" action=\"\">
                <tr class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 25) == false)) {
                echo "active";
            }
            echo "\">
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", true, true, true, 26)) {
                // line 27
                echo "                        <td class=\"align-middle ps-3\">
                            <strong>";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            } else {
                // line 31
                echo "                        <td class=\"align-middle ps-3\">
                            <strong>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.946"), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            }
            // line 35
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", true, true, true, 35)) {
                // line 36
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 38
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.947"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 40
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", true, true, true, 40)) {
                // line 41
                echo "                        <td class=\"align-middle\"><p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</p>
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, true, true, 42), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 42), [], "array", false, true, true, 42), "const", [], "any", false, true, true, 42), "readme", [], "any", true, true, true, 42)) {
                    // line 43
                    echo "                                <a href=\"#\" class=\"view_readme\" data-bs-toggle=\"modal\" data-bs-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "config", [], "any", false, false, true, 43), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 43), [], "array", false, false, true, 43), "const", [], "any", false, false, true, 43), "readme", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.897"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 45
                echo "                        </td>
                    ";
            } else {
                // line 47
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.949"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 49
            echo "                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["unregisteredPluginsConfigPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 53), [], "array", true, true, true, 53)) {
                // line 54
                echo "                            <a href='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["unregisteredPluginsConfigPages"]) || array_key_exists("unregisteredPluginsConfigPages", $context) ? $context["unregisteredPluginsConfigPages"] : (function () { throw new RuntimeError('Variable "unregisteredPluginsConfigPages" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 54), [], "array", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.950"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 56
                echo "                            &nbsp;-&nbsp;
                        ";
            }
            // line 58
            echo "                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
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
        return "@admin/Store/unregisterd_plugin_table.twig";
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
        return array (  197 => 62,  188 => 58,  184 => 56,  176 => 54,  174 => 53,  168 => 49,  162 => 47,  158 => 45,  148 => 43,  146 => 42,  141 => 41,  138 => 40,  132 => 38,  126 => 36,  123 => 35,  117 => 32,  114 => 31,  108 => 28,  105 => 27,  103 => 26,  97 => 25,  90 => 24,  86 => 23,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  57 => 11,);
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
<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 ps-3 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.941'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.942'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.943'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.944'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.945'|trans}}</th>
        </tr>
        </thead>
        <tbody>
        {% for Plugin in Plugins %}
            <form id=\"{{ Plugin.name }}\" name=\"{{ Plugin.name }}\" method=\"post\" action=\"\">
                <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                    {% if Plugin.name is defined %}
                        <td class=\"align-middle ps-3\">
                            <strong>{{ Plugin.name }}</strong>
                        </td>
                    {% else %}
                        <td class=\"align-middle ps-3\">
                            <strong>{{'admin.store.unregistered_plugin_table.946'|trans}}</strong>
                        </td>
                    {% endif %}
                    {% if Plugin.version is defined %}
                        <td class=\"align-middle\">{{ Plugin.version }}</td>
                    {% else %}
                        <td class=\"align-middle\">{{'admin.store.unregistered_plugin_table.947'|trans}}</td>
                    {% endif %}
                    {% if Plugin.code is defined %}
                        <td class=\"align-middle\"><p>{{ Plugin.code }}</p>
                            {% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                <a href=\"#\" class=\"view_readme\" data-bs-toggle=\"modal\" data-bs-target=\"#readmeModal\" data-name=\"{{ Plugin.name }}\" data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme')  }}\">{{ 'admin.store.plugin_table.897'|trans }}</a>
                            {% endif %}
                        </td>
                    {% else %}
                        <td class=\"align-middle\">{{'admin.store.unregistered_plugin_table.949'|trans}}</td>
                    {% endif %}
                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        {% if unregisteredPluginsConfigPages[Plugin.code] is defined %}
                            <a href='{{ unregisteredPluginsConfigPages[Plugin.code]}}'>{{'admin.store.unregistered_plugin_table.950'|trans}}</a>
                        {% else %}
                            &nbsp;-&nbsp;
                        {% endif %}
                    </td>
                </tr>
            </form>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@admin/Store/unregisterd_plugin_table.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\unregisterd_plugin_table.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 25);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans'],
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
