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

/* @admin/Store/plugin_search_panel.twig */
class __TwigTemplate_8a4c55608d503cb3f02f21eeba1703f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search_panel.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search_panel.twig"));

        // line 11
        echo "
<div class=\"col-sm-2 pe-2 pe-sm-3\">
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, true, 14), 14, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "store_url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\" class=\"fw-bold\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</a>（";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.latest"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "version", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "）
        </h5>
        <h6>";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "short_description", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"fw-bold text-dark\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "price", [], "any", false, false, true, 29)) {
            // line 30
            echo "            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pe-1 fw-bold\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.dl"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "downloads", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
            echo "</dd>
            </dl>
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ms-4\"><span class=\"pe-1 fw-bold\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.support"), "html", null, true);
        echo "</span> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "supported_versions", [], "any", false, false, true, 37));
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["version"], 37, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 37) == false)) {
                echo ", ";
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
        echo "</dd>
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-end\">
    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 43, $this->source); })()), "eccube_owners_store_url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\" class=\"btn btn-ec-regular\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.detail"), "html", null, true);
        echo "</a>
        ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "update_status", [], "any", false, false, true, 45) == 1)) {
            // line 46
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, true, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "update_status", [], "any", false, false, true, 49) == 2)) {
            // line 50
            echo "            <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "update_status", [], "any", false, false, true, 51) == 3)) {
            // line 52
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, true, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "update_status", [], "any", false, false, true, 55) == 4)) {
            // line 56
            echo "            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 57, $this->source); })()), "authentication_key", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
        ";
        }
        // line 60
        echo "    </form>
</div>

<!-- Modal -->
";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig");
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_search_panel.twig";
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
        return array (  228 => 64,  222 => 60,  217 => 58,  213 => 57,  210 => 56,  208 => 55,  203 => 53,  198 => 52,  196 => 51,  191 => 50,  189 => 49,  184 => 47,  179 => 46,  177 => 45,  171 => 44,  165 => 43,  123 => 37,  118 => 34,  110 => 31,  107 => 30,  105 => 29,  95 => 26,  88 => 22,  78 => 20,  67 => 14,  61 => 13,  57 => 11,);
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

<div class=\"col-sm-2 pe-2 pe-sm-3\">
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-{{ item.id }}\" data-code=\"{{ item.code }}\">
        <img class=\"w-100 img-responsive\" src=\"{{ item.image|default(asset('noimage_plugin_list.png', 'save_image')) }}\" alt=\"{{ item.name }}\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"{{ item.store_url }}\" class=\"fw-bold\" target=\"_blank\">{{ item.name }}</a>（{{ 'admin.store.plugin_owners_search.latest'|trans }}{{ item.version }}）
        </h5>
        <h6>{{ item.short_description }}</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"fw-bold text-dark\">{{ 'admin.store.plugin.price'|trans }} </span> {{ item.price|price }}<small> ({{ 'common.tax_include'|trans }})</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            {% if not item.price %}
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pe-1 fw-bold\">{{'admin.store.plugin_owners_search.dl'|trans}}</span> {{ item.downloads|number_format }}</dd>
            </dl>
            {% endif %}
        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ms-4\"><span class=\"pe-1 fw-bold\">{{ 'admin.store.plugin_owners_search.support'|trans }}</span> {% for version in item.supported_versions %}{{ version }} {%- if loop.last == false%}, {% endif -%}{% endfor %}</dd>
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-end\">
    <form action=\"{{ eccube_config.eccube_owners_store_url }}/gateway/purchase/?product_id={{ item.id }}\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-{{ item.id }}\" class=\"btn btn-ec-regular\">{{'admin.store.plugin_owners_search.detail'|trans}}</a>
        {% if item.update_status == 1 %}
            <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                {{ 'admin.store.plugin_owners_search.install.free'|trans }}
            </a>
        {% elseif item.update_status == 2 %}
            <a href=\"#\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.installed'|trans }}</a>
        {% elseif item.update_status == 3 %}
            <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                {{ 'admin.store.plugin.update'|trans }}
            </a>
        {% elseif item.update_status == 4 %}
            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"{{ BaseInfo.authentication_key }}\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'admin.store.plugin_owners_search.install.fee'|trans }}\" />
        {% endif %}
    </form>
</div>

<!-- Modal -->
{{ include('@admin/Store/plugin_detail_modal.twig') }}
", "@admin/Store/plugin_search_panel.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_search_panel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "for" => 37);
        static $filters = array("escape" => 13, "default" => 14, "trans" => 20, "price" => 26, "number_format" => 31);
        static $functions = array("asset" => 14, "url" => 46, "include" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'default', 'trans', 'price', 'number_format'],
                ['asset', 'url', 'include']
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
