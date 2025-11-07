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

/* EccubePaymentLite42/Resource/template/admin/Order/complete_payment_button.twig */
class __TwigTemplate_f07eed22b488ca3868ba91afa8ef3c1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/complete_payment_button.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/complete_payment_button.twig"));

        // line 1
        echo "<script>
    \$(function() {
        ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, true, 3) != null)) {
            // line 4
            echo "            \$('#orderOverview .col-6:first').append(
                '<div class=\"row mb-3\">' +
                    '<div class=\"col-3 col-form-label\">' +
                        '登録済みクレジットカード決済登録' +
                    '</div>' +
                    '<div class=\"col\">' +
                        '<a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#completePaymentBtn\">' +
                            '";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.order.complete_payment.button_text"), "html", null, true);
            echo "' +
                        '</a>' +
                    '</div>' +
                '</div>'
            );
            \$('#registerGmoEpsilonCreditCardBtn').on('click', function() {
                location.href = '";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_create_reg_credit_order", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, true, 17)]), "html", null, true);
            echo "';
            });
        ";
        }
        // line 20
        echo "    });
</script>
<div class=\"modal fade\" id=\"completePaymentBtn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"completePaymentBtn\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.order.complete_payment.confirm"), "html", null, true);
        echo "</h5>
                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"\">注文番号: ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "の受注情報を、支払方法「登録済みのクレジットカードで決済」でイプシロン決済サービスに登録します。</div>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\" href=\"javascript:void(0)\">
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.complete_payment.cancel"), "html", null, true);
        echo "
                </a>
                <a class=\"btn btn-ec-conversion\" id=\"registerGmoEpsilonCreditCardBtn\" href=\"javascript:void(0)\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.complete_payment.register"), "html", null, true);
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
        return "EccubePaymentLite42/Resource/template/admin/Order/complete_payment_button.twig";
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
        return array (  115 => 37,  109 => 34,  102 => 30,  95 => 26,  87 => 20,  81 => 17,  72 => 11,  63 => 4,  61 => 3,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        {% if Order.id != null %}
            \$('#orderOverview .col-6:first').append(
                '<div class=\"row mb-3\">' +
                    '<div class=\"col-3 col-form-label\">' +
                        '登録済みクレジットカード決済登録' +
                    '</div>' +
                    '<div class=\"col\">' +
                        '<a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#completePaymentBtn\">' +
                            '{{ 'gmo_epsilon.admin.order.complete_payment.button_text'|trans }}' +
                        '</a>' +
                    '</div>' +
                '</div>'
            );
            \$('#registerGmoEpsilonCreditCardBtn').on('click', function() {
                location.href = '{{ url('eccube_payment_lite42_admin_create_reg_credit_order', {id: Order.id}) }}';
            });
        {% endif %}
    });
</script>
<div class=\"modal fade\" id=\"completePaymentBtn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"completePaymentBtn\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'gmo_epsilon.admin.order.complete_payment.confirm'|trans }}</h5>
                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"\">注文番号: {{ Order.id }}の受注情報を、支払方法「登録済みのクレジットカードで決済」でイプシロン決済サービスに登録します。</div>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\" href=\"javascript:void(0)\">
                    {{ 'gmo_epsilon.admin.complete_payment.cancel'|trans }}
                </a>
                <a class=\"btn btn-ec-conversion\" id=\"registerGmoEpsilonCreditCardBtn\" href=\"javascript:void(0)\">
                    {{ 'gmo_epsilon.admin.complete_payment.register'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>
", "EccubePaymentLite42/Resource/template/admin/Order/complete_payment_button.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Order\\complete_payment_button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 11, "trans" => 11);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
                ['url']
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
