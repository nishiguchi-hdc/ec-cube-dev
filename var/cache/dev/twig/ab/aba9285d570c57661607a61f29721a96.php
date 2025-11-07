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

/* @admin/Content/layout_list.twig */
class __TwigTemplate_fe64191905e8835940dbc4390b47fcb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout_list.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout_list.twig"));

        // line 13
        $context["menus"] = ["content", "layout"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/layout_list.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script>
        \$(function() {
            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 35
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Layouts"]) || array_key_exists("Layouts", $context) ? $context["Layouts"] : (function () { throw new RuntimeError('Variable "Layouts" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
            // line 43
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "DeviceType", [], "any", false, false, true, 47), "id", [], "any", false, false, true, 47) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                // line 48
                echo "                                        ";
                $context["icon"] = "fa-desktop";
                // line 49
                echo "                                    ";
            } else {
                // line 50
                echo "                                        ";
                $context["icon"] = "fa-mobile";
                // line 51
                echo "                                    ";
            }
            // line 52
            echo "                                    <i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
            echo " fa-lg me-2\"></i>
                                    <a class=\"card-title align-middle\"
                                       href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"col-4 text-end\">
                                    ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["Layout"], "isDefault", [], "method", false, false, true, 57) == false)) {
                // line 58
                echo "                                        <button class=\"btn btn-ec-sub me-3\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                data-url=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 59)]), "html", null, true);
                echo "\"
                                                data-message=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, true, 60)]), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_delete"), "html", null, true);
                echo "
                                        </button>
                                    ";
            }
            // line 65
            echo "                                    <a href=\"#layout-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"layout-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-angle-down fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 73
            echo "                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", [], "any", false, false, true, 73)) > 0)) {
                // line 74
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", [], "any", false, false, true, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
                    // line 76
                    echo "                                    <div class=\"card-body p-0\">
                                        <div class=\"row justify-content-between p-3\">
                                            <div class=\"col-auto\">
                                                <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, true, 79)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                            </div>
                        ";
            } else {
                // line 86
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "\">
                                <div class=\"p-0 empty-item\">
                                    <div class=\"d-block p-3\">
                                        <span class=\"text-muted\">";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_no_page"), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 94
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "</h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"><!-- jsでメッセージを挿入 --></p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub w-25\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <a href=\"#\" class=\"btn btn-ec-delete\" ";
        // line 109
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo " data-method=\"delete\" data-confirm=\"false\">
                                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </div>
                    </div>
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
        return "@admin/Content/layout_list.twig";
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
        return array (  325 => 110,  321 => 109,  317 => 108,  307 => 101,  300 => 96,  293 => 94,  285 => 89,  278 => 86,  274 => 84,  261 => 79,  256 => 76,  252 => 75,  247 => 74,  244 => 73,  231 => 65,  225 => 62,  220 => 60,  216 => 59,  213 => 58,  211 => 57,  203 => 54,  197 => 52,  194 => 51,  191 => 50,  188 => 49,  185 => 48,  183 => 47,  177 => 43,  172 => 42,  165 => 39,  159 => 35,  149 => 34,  126 => 19,  116 => 18,  97 => 16,  78 => 15,  67 => 11,  65 => 13,  40 => 11,);
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

{% set menus = ['content', 'layout'] %}

{% block title %}{{ 'admin.content.layout_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% block javascript %}
    <script>
        \$(function() {
            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_content_layout_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                </div>
                {# layouts #}
                {% for Layout in Layouts %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    {% if Layout.DeviceType.id == constant('Eccube\\\\Entity\\\\Master\\\\DeviceType::DEVICE_TYPE_PC') %}
                                        {% set icon = 'fa-desktop' %}
                                    {% else %}
                                        {% set icon = 'fa-mobile' %}
                                    {% endif %}
                                    <i class=\"fa fa-fw {{ icon }} fa-lg me-2\"></i>
                                    <a class=\"card-title align-middle\"
                                       href=\"{{ url('admin_content_layout_edit', { id : Layout.id } ) }}\">{{ Layout.name }}</a>
                                </div>
                                <div class=\"col-4 text-end\">
                                    {% if Layout.isDefault() == false %}
                                        <button class=\"btn btn-ec-sub me-3\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                data-url=\"{{ url('admin_content_layout_delete', { id: Layout.id }) }}\"
                                                data-message=\"{{ 'admin.common.delete_modal__message'|trans({ '%name%' : Layout.name }) }}\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            {{ 'admin.content.layout_delete'|trans }}
                                        </button>
                                    {% endif %}
                                    <a href=\"#layout-{{ Layout.id }}\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"layout-{{ Layout.id }}\">
                                        <i class=\"fa fa-angle-down fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {# Pages #}
                        {% if Layout.pages|length > 0 %}
                            <div class=\"collapse ec-cardCollapse\" id=\"layout-{{ Layout.id }}\">
                                {% for Page in Layout.pages %}
                                    <div class=\"card-body p-0\">
                                        <div class=\"row justify-content-between p-3\">
                                            <div class=\"col-auto\">
                                                <a href=\"{{ url('admin_content_page_edit', { id: Page.id }) }}\">{{ Page.name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% else %}
                            <div class=\"collapse ec-cardCollapse\" id=\"layout-{{ Layout.id }}\">
                                <div class=\"p-0 empty-item\">
                                    <div class=\"d-block p-3\">
                                        <span class=\"text-muted\">{{ 'admin.content.layout_no_page'|trans }}</span>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}

                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"><!-- jsでメッセージを挿入 --></p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub w-25\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                <a href=\"#\" class=\"btn btn-ec-delete\" {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                    {{ 'admin.common.delete'|trans }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Content/layout_list.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Content\\layout_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 42, "if" => 47);
        static $filters = array("escape" => 15, "trans" => 15, "length" => 73);
        static $functions = array("url" => 39, "constant" => 47, "csrf_token_for_anchor" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'length'],
                ['url', 'constant', 'csrf_token_for_anchor']
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
