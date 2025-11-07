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

/* @admin/Store/template.twig */
class __TwigTemplate_fe33d9e30c1e0f461047af2a9d93e95e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/template.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/template.twig"));

        // line 13
        $context["menus"] = ["store", "template", "template_list"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/template.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_list"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        \$(function () {
            \$('#form1').on('submit', function () {
                \$('#form_selected').val(\$('input[name=template]:checked').val());
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 31
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_template");
        echo "\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "_token", [], "any", false, false, true, 32), 32, $this->source), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "selected", [], "any", false, false, true, 33), 33, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_template_install");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_list"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 align-middle text-center\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.select"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 align-middle text-center\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_name"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 align-middle text-center\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.save_path"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Templates"]) || array_key_exists("Templates", $context) ? $context["Templates"] : (function () { throw new RuntimeError('Variable "Templates" does not exist.', 53, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Template"]) {
            // line 54
            echo "                                    <tr>
                                        <td class=\"align-middle text-center\">
                                            <input type=\"radio\" name=\"template\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 56, $this->source); })()), "eccube_theme_code", [], "any", false, false, true, 56) == twig_get_attribute($this->env, $this->source, $context["Template"], "code", [], "any", false, false, true, 56))) {
                echo "checked=\"checked\"";
            }
            echo "/>
                                        </td>
                                        <td class=\"align-middle text-center\">";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "name", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</td>
                                        <td class=\"align-middle text-center\">
                                            <ul>
                                                <li>app/template/";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "code", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "</li>
                                                <li>html/template/";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "code", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</li>
                                            </ul>
                                        </td>
                                        <td class=\"align-middle text-center icon_edit\">
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_template_download", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 68)]), "html", null, true);
            echo "\"
                                                       class=\"btn btn-ec-actionIcon action-download\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                       title=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.download"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-cloud-download fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                        <a class=\"btn btn-ec-actionIcon action-delete ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["Template"], "default_template", [], "any", false, false, true, 76) || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 76, $this->source); })()), "eccube_theme_code", [], "any", false, false, true, 76) == twig_get_attribute($this->env, $this->source, $context["Template"], "code", [], "any", false, false, true, 76)))) {
                echo "disabled";
            }
            echo "\"
                                                           data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"confirmModal-";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
            echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Template"], "name", [], "any", false, false, true, 88)]), "html", null, true);
            echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                                                    <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                       href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 93)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\">
                                                                        ";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                </tbody>
                            </table>
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
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
        return "@admin/Store/template.twig";
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
        return array (  360 => 123,  340 => 105,  315 => 94,  309 => 93,  304 => 91,  298 => 88,  291 => 84,  282 => 80,  276 => 77,  270 => 76,  266 => 75,  258 => 70,  253 => 68,  244 => 62,  240 => 61,  234 => 58,  225 => 56,  221 => 54,  204 => 53,  196 => 48,  192 => 47,  188 => 46,  180 => 41,  172 => 38,  164 => 33,  160 => 32,  155 => 31,  145 => 30,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['store', 'template', 'template_list'] %}

{% block title %}{{ 'admin.store.template.template_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.store'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function () {
            \$('#form1').on('submit', function () {
                \$('#form_selected').val(\$('input[name=template]:checked').val());
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"{{ url('admin_store_template') }}\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.selected) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_store_template_install') }}\">{{ 'admin.common.create__new'|trans }}</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">{{ 'admin.store.template.template_list'|trans }}</span></div>
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 align-middle text-center\">{{ 'admin.store.template.select'|trans }}</th>
                                    <th class=\"border-top-0 align-middle text-center\">{{ 'admin.store.template.template_name'|trans }}</th>
                                    <th class=\"border-top-0 align-middle text-center\">{{ 'admin.store.template.save_path'|trans }}</th>
                                    <th class=\"border-top-0\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for Template in Templates %}
                                    <tr>
                                        <td class=\"align-middle text-center\">
                                            <input type=\"radio\" name=\"template\" value=\"{{ Template.id }}\" {% if eccube_config.eccube_theme_code == Template.code %}checked=\"checked\"{% endif %}/>
                                        </td>
                                        <td class=\"align-middle text-center\">{{ Template.name }}</td>
                                        <td class=\"align-middle text-center\">
                                            <ul>
                                                <li>app/template/{{Template.code }}</li>
                                                <li>html/template/{{ Template.code }}</li>
                                            </ul>
                                        </td>
                                        <td class=\"align-middle text-center icon_edit\">
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"{{ url('admin_store_template_download', { 'id' : Template.id }) }}\"
                                                       class=\"btn btn-ec-actionIcon action-download\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                       title=\"{{ 'admin.common.download'|trans }}\">
                                                        <i class=\"fa fa-cloud-download fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                        <a class=\"btn btn-ec-actionIcon action-delete {% if Template.default_template or eccube_config.eccube_theme_code == Template.code %}disabled{% endif %}\"
                                                           data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-{{ loop.index }}\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"confirmModal-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-{{ loop.index }}\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">{{ 'admin.common.delete_modal__message'|trans({ '%name%': Template.name }) }}</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                    <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                       href=\"{{ url('admin_store_template_delete', { 'id': Template.id}) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                                        {{ 'admin.common.delete'|trans }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Store/template.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\template.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 53, "if" => 56);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 31, "form_widget" => 32, "csrf_token_for_anchor" => 93);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'csrf_token_for_anchor']
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
