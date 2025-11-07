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

/* EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig */
class __TwigTemplate_15058096fb45f28043d851cfef99321d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig"));

        // line 3
        $context["mypageno"] = "regular_list";
        // line 4
        $context["regular_mypage_no"] = "regular_cycle";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 8
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    ";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/default/Mypage/RegularNav/style.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_cycle"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 19
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    <div class=\"ec-mypageRole\">
        <form method=\"post\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_cycle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, true, 28)]), "html", null, true);
        echo "\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "_token", [], "any", false, false, true, 29), 29, $this->source), 'widget');
        echo "
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-borderedDefs\">
                        <div class=\"ec-orderPayment\">
                            <div class=\"ec-rectHeading\">
                                <h2>お届けサイクル</h2>
                            </div>
                            <div class=\"ec-radio\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "RegularCycle", [], "any", false, false, true, 38), 38, $this->source), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"ec-orderPayment\">
                            <div class=\"ec-rectHeading\">
                                <h2>お届け日の確認</h2>
                            </div>
                            <div class=\"ec-input\">
                                <p id=\"next_delivery_date\">次回のお届け日は";
        // line 46
        echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularShipping"]) || array_key_exists("RegularShipping", $context) ? $context["RegularShipping"] : (function () { throw new RuntimeError('Variable "RegularShipping" does not exist.', 46, $this->source); })()), "nextDeliveryDate", [], "any", false, false, true, 46), 46, $this->source)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")), "html", null, true);
        echo "です。</p>
                                <p id=\"one_after_another_next_delivery_date\">次々回のお届け日は";
        // line 47
        echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed((isset($context["oneAfterAnotherNextDeliveryDate"]) || array_key_exists("oneAfterAnotherNextDeliveryDate", $context) ? $context["oneAfterAnotherNextDeliveryDate"] : (function () { throw new RuntimeError('Variable "oneAfterAnotherNextDeliveryDate" does not exist.', 47, $this->source); })()), 47, $this->source)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")), "html", null, true);
        echo "です。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-off4Grid\">
                <div class=\"ec-off4Grid__cell\">
                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">登録する</button>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 62
        echo "<script>
\$('input[id^=regular_cycle_RegularCycle_]').on('change', function() {
    var regular_cycle_id = \$('[id^=regular_cycle_RegularCycle_]:checked').val();
    \$.ajax({
    url: '";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_delivery_date");
        echo "',
        type: 'POST',
        data: {
            regular_shipping_id: '";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularShipping"]) || array_key_exists("RegularShipping", $context) ? $context["RegularShipping"] : (function () { throw new RuntimeError('Variable "RegularShipping" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "',
            regular_cycle_id: regular_cycle_id,
        },
        dataType: 'json',
    }).done(function(data) {
        if (data) {
            \$('#next_delivery_date').text('次回のお届け日は、'+data.next_delivery_date+'です。');
            \$('#one_after_another_next_delivery_date').text('次々回のお届け日は、'+data.one_after_another_next_delivery_date+'です。');
        }
    }).fail(function() {
        alert('お届け日の取得に失敗しました。');
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig";
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
        return array (  216 => 69,  210 => 66,  204 => 62,  194 => 61,  170 => 47,  166 => 46,  155 => 38,  143 => 29,  139 => 28,  127 => 19,  120 => 17,  116 => 15,  106 => 14,  93 => 11,  83 => 10,  72 => 1,  70 => 8,  68 => 6,  66 => 4,  64 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'regular_list' %}
{% set regular_mypage_no = 'regular_cycle' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% set body_class = 'mypage' %}

{% block stylesheet %}
    {{ include('@EccubePaymentLite42/default/Mypage/RegularNav/style.twig') }}
{% endblock stylesheet %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.regular_cycle'|trans }}</h1>
        </div>
        {{ include('Mypage/navi.twig') }}
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    <div class=\"ec-mypageRole\">
        <form method=\"post\" action=\"{{ url('eccube_payment_lite42_mypage_regular_cycle', { id: RegularOrder.id }) }}\">
            {{ form_widget(form._token) }}
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-borderedDefs\">
                        <div class=\"ec-orderPayment\">
                            <div class=\"ec-rectHeading\">
                                <h2>お届けサイクル</h2>
                            </div>
                            <div class=\"ec-radio\">
                                {{ form_widget(form.RegularCycle) }}
                            </div>
                        </div>
                        <div class=\"ec-orderPayment\">
                            <div class=\"ec-rectHeading\">
                                <h2>お届け日の確認</h2>
                            </div>
                            <div class=\"ec-input\">
                                <p id=\"next_delivery_date\">次回のお届け日は{{ RegularShipping.nextDeliveryDate|date_day_with_weekday|default('common.select__unspecified'|trans) }}です。</p>
                                <p id=\"one_after_another_next_delivery_date\">次々回のお届け日は{{ oneAfterAnotherNextDeliveryDate|date_day_with_weekday|default('common.select__unspecified'|trans) }}です。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-off4Grid\">
                <div class=\"ec-off4Grid__cell\">
                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">登録する</button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}
{% block javascript %}
<script>
\$('input[id^=regular_cycle_RegularCycle_]').on('change', function() {
    var regular_cycle_id = \$('[id^=regular_cycle_RegularCycle_]:checked').val();
    \$.ajax({
    url: '{{ url('eccube_payment_lite42_mypage_delivery_date') }}',
        type: 'POST',
        data: {
            regular_shipping_id: '{{ RegularShipping.id }}',
            regular_cycle_id: regular_cycle_id,
        },
        dataType: 'json',
    }).done(function(data) {
        if (data) {
            \$('#next_delivery_date').text('次回のお届け日は、'+data.next_delivery_date+'です。');
            \$('#one_after_another_next_delivery_date').text('次々回のお届け日は、'+data.one_after_another_next_delivery_date+'です。');
        }
    }).fail(function() {
        alert('お届け日の取得に失敗しました。');
    });
});
</script>
{% endblock %}
", "EccubePaymentLite42/Resource/template/default/Mypage/regular_cycle.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\regular_cycle.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 6);
        static $filters = array("escape" => 17, "trans" => 17, "default" => 46, "date_day_with_weekday" => 46);
        static $functions = array("include" => 11, "url" => 28, "form_widget" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans', 'default', 'date_day_with_weekday'],
                ['include', 'url', 'form_widget']
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
