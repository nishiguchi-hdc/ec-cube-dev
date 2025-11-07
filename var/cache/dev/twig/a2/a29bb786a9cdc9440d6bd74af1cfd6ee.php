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

/* EccubePaymentLite42/Resource/template/admin/ip_black_list_prototype.twig */
class __TwigTemplate_eaf4ac8cf1c2c8e8064c297f76cf60e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/ip_black_list_prototype.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/ip_black_list_prototype.twig"));

        // line 1
        $context["IpBlackList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "<li class=\"list-group-item ip_black_list_item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">";
        // line 8
        if (twig_test_empty((isset($context["IpBlackList"]) || array_key_exists("IpBlackList", $context) ? $context["IpBlackList"] : (function () { throw new RuntimeError('Variable "IpBlackList" does not exist.', 8, $this->source); })()))) {
            echo "__value__";
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["IpBlackList"]) || array_key_exists("IpBlackList", $context) ? $context["IpBlackList"] : (function () { throw new RuntimeError('Variable "IpBlackList" does not exist.', 8, $this->source); })()), 8, $this->source), "html", null, true);
        }
        echo "</a>
        </div>
        <div class=\"col-auto text-end\">
            <a class=\"btn btn-ec-actionIcon mr-2 action-up\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-down\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
        echo "\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>

            <a class=\"btn btn-ec-actionIcon mr-2 remove_ip_black_list_item\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"form-row\">
                <div class=\"col-auto d-flex align-items-center\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "ip_address", [], "any", false, false, true, 34), 34, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34)]]);
        echo "
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"submit\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "ip_address", [], "any", false, false, true, 42), 42, $this->source), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "sort_no", [], "any", false, false, true, 43), 43, $this->source), 'widget', ["attr" => ["class" => "sort-no"]]);
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "sort_no", [], "any", false, false, true, 44), 44, $this->source), 'errors');
        echo "
            </div>
        </div>
    </div>
</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/ip_black_list_prototype.twig";
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
        return array (  137 => 44,  133 => 43,  129 => 42,  124 => 40,  118 => 37,  112 => 34,  100 => 25,  92 => 20,  85 => 16,  78 => 12,  67 => 8,  59 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set IpBlackList = form.vars.value %}
<li class=\"list-group-item ip_black_list_item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">{% if IpBlackList is empty %}__value__{% else %}{{ IpBlackList }}{% endif %}</a>
        </div>
        <div class=\"col-auto text-end\">
            <a class=\"btn btn-ec-actionIcon mr-2 action-up\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-down\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>

            <a class=\"btn btn-ec-actionIcon mr-2 remove_ip_black_list_item\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"form-row\">
                <div class=\"col-auto d-flex align-items-center\">
                    {{ form_widget(form.ip_address, {'attr': {'data-origin-value': form.vars.value }}) }}
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"submit\">{{ 'admin.common.cancel'|trans }}</button>
                </div>
                {{ form_errors(form.ip_address) }}
                {{ form_widget(form.sort_no, {'attr': {'class': \"sort-no\" }}) }}
                {{ form_errors(form.sort_no) }}
            </div>
        </div>
    </div>
</li>
", "EccubePaymentLite42/Resource/template/admin/ip_black_list_prototype.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\ip_black_list_prototype.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8);
        static $filters = array("escape" => 8, "trans" => 12);
        static $functions = array("form_widget" => 34, "form_errors" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans'],
                ['form_widget', 'form_errors']
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
