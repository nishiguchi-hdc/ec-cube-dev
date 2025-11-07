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

/* EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_form.twig */
class __TwigTemplate_b60f942b669b4e5b7c51eb30c03f46c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('.ec-orderPayment:last').after(
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.shopping.regular_cycle"), "html", null, true);
        echo "</h2>'+
                '</div>'+
                '<div class=\"ec-radio\">'+
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "RegularCycles", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 10
            echo "                        ";
            $context["RegularCycle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "RegularCycles", [], "any", false, false, true, 10), "vars", [], "any", false, false, true, 10), "choices", [], "any", false, false, true, 10), $context["key"], [], "array", false, false, true, 10), "data", [], "any", false, false, true, 10);
            // line 11
            echo "                        '<div style=\"display: block;\">'+
                            '<input type=\"radio\" id=\"shopping_order_RegularCycles_";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 12, $this->source), "html", null, true);
            echo "\" name=\"_shopping_order[RegularCycles]\" required=\"required\" data-trigger=\"change\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularCycle"]) || array_key_exists("RegularCycle", $context) ? $context["RegularCycle"] : (function () { throw new RuntimeError('Variable "RegularCycle" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" />'+
                            '<label for=\"shopping_order_RegularCycles_";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 13, $this->source), "html", null, true);
            echo "\">'+
                                '<span>";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["RegularCycle"]) || array_key_exists("RegularCycle", $context) ? $context["RegularCycle"] : (function () { throw new RuntimeError('Variable "RegularCycle" does not exist.', 14, $this->source); })()), 14, $this->source), "html", null, true);
            echo "</span>'+
                            '</label>'+
                        '</div>'+
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                '</div>'+
                '<div class=\"ec-input ";
        // line 19
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "RegularCycles", [], "any", false, false, true, 19), 19, $this->source))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "RegularCycles", [], "any", false, false, true, 19), 19, $this->source), 'errors');
        echo "</div>'+
                '<p>'+
                    '※ お届けサイクルの異なる定期商品を同時に購入する場合は、それぞれの定期商品で一致するお届けサイクルのみ選択可能です。'+
                '</p>'+
            '</div>'+
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>お届け日</h2>'+
                '</div>'+
                '<p id=\"first_delivery_date\">'+
                '</p>'+
                '<p id=\"next_delivery_date\">'+
                '</p>'+
            '</div>'
        );
        \$('input[id^=shopping_order_RegularCycles]').on('change', function() {
            var shipping_delivery_date = \$(\"#shopping_order_Shippings_0_shipping_delivery_date\").val();
            var regular_cycle = \$('[id^=shopping_order_RegularCycles_]:checked').val();
            \$.ajax({
                url: '";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_shipping_delivery_date");
        echo "',
                type: 'POST',
                data: {
                    'shipping_delivery_date' : shipping_delivery_date,
                    'regular_cycle' : regular_cycle,
                },
                dataType: 'json',
            }).done(function(data) {
                if (data) {
                    \$('#first_delivery_date').text('初回のお届け日は、'+data.first_delivery_date+'です。');
                    \$('#next_delivery_date').text('2回目のお届け日は、'+data.next_delivery_date+'です。');
                }
            }).fail(function() {
                alert('お届け日の取得に失敗しました。');
            });
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_form.twig";
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
        return array (  127 => 38,  103 => 19,  100 => 18,  90 => 14,  86 => 13,  80 => 12,  77 => 11,  74 => 10,  70 => 9,  64 => 6,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('.ec-orderPayment:last').after(
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>{{ 'gmo_epsilon.front.shopping.regular_cycle'|trans }}</h2>'+
                '</div>'+
                '<div class=\"ec-radio\">'+
                    {% for key, child in form.RegularCycles %}
                        {% set RegularCycle = form.RegularCycles.vars.choices[key].data %}
                        '<div style=\"display: block;\">'+
                            '<input type=\"radio\" id=\"shopping_order_RegularCycles_{{ key }}\" name=\"_shopping_order[RegularCycles]\" required=\"required\" data-trigger=\"change\" value=\"{{ RegularCycle.id }}\" />'+
                            '<label for=\"shopping_order_RegularCycles_{{ key }}\">'+
                                '<span>{{ RegularCycle }}</span>'+
                            '</label>'+
                        '</div>'+
                    {% endfor %}
                '</div>'+
                '<div class=\"ec-input {{ has_errors(form.RegularCycles) ? ' error' }}\">{{ form_errors(form.RegularCycles) }}</div>'+
                '<p>'+
                    '※ お届けサイクルの異なる定期商品を同時に購入する場合は、それぞれの定期商品で一致するお届けサイクルのみ選択可能です。'+
                '</p>'+
            '</div>'+
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>お届け日</h2>'+
                '</div>'+
                '<p id=\"first_delivery_date\">'+
                '</p>'+
                '<p id=\"next_delivery_date\">'+
                '</p>'+
            '</div>'
        );
        \$('input[id^=shopping_order_RegularCycles]').on('change', function() {
            var shipping_delivery_date = \$(\"#shopping_order_Shippings_0_shipping_delivery_date\").val();
            var regular_cycle = \$('[id^=shopping_order_RegularCycles_]:checked').val();
            \$.ajax({
                url: '{{ url('eccube_payment_lite42_shipping_delivery_date') }}',
                type: 'POST',
                data: {
                    'shipping_delivery_date' : shipping_delivery_date,
                    'regular_cycle' : regular_cycle,
                },
                dataType: 'json',
            }).done(function(data) {
                if (data) {
                    \$('#first_delivery_date').text('初回のお届け日は、'+data.first_delivery_date+'です。');
                    \$('#next_delivery_date').text('2回目のお届け日は、'+data.next_delivery_date+'です。');
                }
            }).fail(function() {
                alert('お届け日の取得に失敗しました。');
            });
        });
    });
</script>
", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\regular_cycle_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "set" => 10);
        static $filters = array("escape" => 6, "trans" => 6);
        static $functions = array("has_errors" => 19, "form_errors" => 19, "url" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'trans'],
                ['has_errors', 'form_errors', 'url']
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
