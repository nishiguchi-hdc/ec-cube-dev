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

/* EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig */
class __TwigTemplate_694e44d4a58a8310bcafd1adc91ebc8e extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig"));

        // line 3
        $context["menus"] = ["regular", "discount"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.title.regular.discount"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.sub_title.regular.discount"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "<style type=\"text/css\">
    .discount-group-item {
        max-width: 800px;
    }
    .discount-group-item > table {
        width: 100%;
        border: 1px solid #c5c5c5;
        position: relative;
    }
    .discount-group-item > table .group-action {
        position: absolute;
        right: -35px;
        top: 15px;
        width: 22px;
        height: 22px;
        text-align: center;
        cursor: pointer
    }
    .discount-group-item > table td {
        border: 1px solid #c3c3c3;
    }
    .discount-group-item > table .discount-id {
        background: #efefef !important;
        font-weight: bold;
        padding-left: 10px;
        width: 80px;
    }
    .discount-group-item > table tr:first-child td {
        background: #f7f7f7;
        font-weight: bold;
    }
    .discount-group-item > table tr td {
        padding: 10px 20px;
    }
    .discount-group-item > table .discount-rate {
        width: auto;
        display: inline-block;
        margin-right: 25px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 52
        echo "<script>
    \$(function() {
        let discountIdMax = ";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["discountIdMax"]) || array_key_exists("discountIdMax", $context) ? $context["discountIdMax"] : (function () { throw new RuntimeError('Variable "discountIdMax" does not exist.', 54, $this->source); })()), 54, $this->source), "html", null, true);
        echo ";

        \$('#regular_discount_setting').on('click', '.group-action-add', function() {
            addRegularDiscountGroup(\$(this));
        });

        \$('#regular_discount_setting').on('click', '.group-action-remove', function() {
            let container = \$(this).closest('table');
            \$(container).closest('.card-body').remove();
        });

        function addRegularDiscountGroup(elm) {
            let container = \$(elm).closest('.discount-group-item');
            let html = container.html();

            discountIdMax = discountIdMax + 1;

            html = html.replace(/regular_discount_matrix_regular_discounts_(\\d+)/mg, 'regular_discount_matrix_regular_discounts_' + discountIdMax);
            html = html.replace(/regular_discount_matrix\\[regular_discounts\\]\\[(\\d+)\\]/mg, 'regular_discount_matrix[regular_discounts][' + discountIdMax + ']');

            let group = \$('<div class=\"discount-group-item\"><div>').html(html);
            group.find('.discount-id').html('ID: ' + discountIdMax + ' <div class=\"group-action group-action-remove\"><i class=\"fas fa-trash-alt\"></i></div>');

            let cardBody = \$('<div class=\"card-body\"></div>').append(group)
            \$('#regular_discount_setting').append(cardBody);

            // set discount_id
            for (let i = 0; i < 3; i++) {
                \$('#regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items_' + i + '_discount_id').val(discountIdMax);
            }
            // reset select box
            \$('select[id^=\"regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items\"]').val('');
            \$('select[id^=\"regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items_0_regular_count\"]').val(1);
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 93
        echo "    <form role=\"form\" method=\"post\">
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "_token", [], "any", false, false, true, 94), 94, $this->source), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\" id=\"regular_discount_setting\">
                        <div class=\"card-header\"><span>定期回数別商品金額割引</span></div>
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "regular_discounts", [], "any", false, false, true, 101));
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
        foreach ($context['_seq'] as $context["_key"] => $context["regular_discount_form"]) {
            // line 102
            echo "                            <div class=\"card-body\">
                                ";
            // line 103
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["regular_discount_form"], "regular_discount_items", [], "any", false, false, true, 103)) > 0)) {
                // line 104
                echo "                                <div class=\"discount-group-item\">
                                    <table>
                                        <tr>
                                            <td rowspan=\"2\" class=\"discount-id\">
                                                ID: ";
                // line 108
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regular_discount_form"], "regular_discount_items", [], "any", false, false, true, 108), 0, [], "array", false, false, true, 108), "vars", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), "discount_id", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "
                                                <span class=\"group-action ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 109) == 1)) {
                    echo "group-action-add";
                } else {
                    echo "group-action-remove";
                }
                echo "\">
                                                    ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 110) == 1)) {
                    // line 111
                    echo "                                                        <i class=\"fas fa-plus-circle\"></i>
                                                    ";
                } else {
                    // line 113
                    echo "                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    ";
                }
                // line 115
                echo "                                                </span>
                                            </td>
                                            ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["regular_discount_form"], "regular_discount_items", [], "any", false, false, true, 117));
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
                foreach ($context['_seq'] as $context["_key"] => $context["regular_discount_item_form"]) {
                    // line 118
                    echo "                                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "discount_id", [], "any", false, false, true, 118), 118, $this->source), 'widget');
                    echo "
                                                ";
                    // line 119
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "item_id", [], "any", false, false, true, 119), 119, $this->source), 'widget');
                    echo "

                                                ";
                    // line 121
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 121) == 1)) {
                        // line 122
                        echo "                                                    <td>
                                                        <div class=\"d-none\">";
                        // line 123
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "regular_count", [], "any", false, false, true, 123), 123, $this->source), 'widget', ["attr" => ["class" => "discount-rate"]]);
                        echo "</div>
                                                        <span>初回から</span>
                                                    </td>
                                                ";
                    } else {
                        // line 127
                        echo "                                                    <td>
                                                        ";
                        // line 128
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "regular_count", [], "any", false, false, true, 128), 128, $this->source), 'widget', ["attr" => ["class" => "discount-rate"]]);
                        echo "
                                                        ";
                        // line 129
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "regular_count", [], "any", false, false, true, 129), 129, $this->source), 'errors');
                        echo "
                                                        <span>回から</span>
                                                    </td>
                                                ";
                    }
                    // line 133
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regular_discount_item_form'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                                        </tr>
                                        <tr>
                                            ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["regular_discount_form"], "regular_discount_items", [], "any", false, false, true, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["regular_discount_item_form"]) {
                    // line 137
                    echo "                                                <td>
                                                    ";
                    // line 138
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "discount_rate", [], "any", false, false, true, 138), 138, $this->source), 'widget', ["attr" => ["class" => "discount-rate"]]);
                    echo "
                                                    ";
                    // line 139
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regular_discount_item_form"], "discount_rate", [], "any", false, false, true, 139), 139, $this->source), 'errors');
                    echo "
                                                    %割引
                                                </td>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regular_discount_item_form'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                        </tr>
                                    </table>
                                </div>
                                ";
            }
            // line 147
            echo "                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regular_discount_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\"></div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.save"), "html", null, true);
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
        return "EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig";
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
        return array (  444 => 163,  428 => 149,  413 => 147,  407 => 143,  397 => 139,  393 => 138,  390 => 137,  386 => 136,  382 => 134,  368 => 133,  361 => 129,  357 => 128,  354 => 127,  347 => 123,  344 => 122,  342 => 121,  337 => 119,  332 => 118,  315 => 117,  311 => 115,  307 => 113,  303 => 111,  301 => 110,  293 => 109,  289 => 108,  283 => 104,  281 => 103,  278 => 102,  261 => 101,  251 => 94,  248 => 93,  238 => 92,  191 => 54,  187 => 52,  177 => 51,  127 => 9,  117 => 8,  98 => 6,  79 => 5,  68 => 1,  66 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}

{% set menus = ['regular', 'discount'] %}

{% block title %}{{ 'gmo_epsilon.admin.title.regular.discount'|trans }}{% endblock %}
{% block sub_title %}{{ 'gmo_epsilon.admin.sub_title.regular.discount'|trans }}{% endblock %}

{% block stylesheet %}
<style type=\"text/css\">
    .discount-group-item {
        max-width: 800px;
    }
    .discount-group-item > table {
        width: 100%;
        border: 1px solid #c5c5c5;
        position: relative;
    }
    .discount-group-item > table .group-action {
        position: absolute;
        right: -35px;
        top: 15px;
        width: 22px;
        height: 22px;
        text-align: center;
        cursor: pointer
    }
    .discount-group-item > table td {
        border: 1px solid #c3c3c3;
    }
    .discount-group-item > table .discount-id {
        background: #efefef !important;
        font-weight: bold;
        padding-left: 10px;
        width: 80px;
    }
    .discount-group-item > table tr:first-child td {
        background: #f7f7f7;
        font-weight: bold;
    }
    .discount-group-item > table tr td {
        padding: 10px 20px;
    }
    .discount-group-item > table .discount-rate {
        width: auto;
        display: inline-block;
        margin-right: 25px;
    }
</style>
{% endblock stylesheet %}

{% block javascript %}
<script>
    \$(function() {
        let discountIdMax = {{ discountIdMax }};

        \$('#regular_discount_setting').on('click', '.group-action-add', function() {
            addRegularDiscountGroup(\$(this));
        });

        \$('#regular_discount_setting').on('click', '.group-action-remove', function() {
            let container = \$(this).closest('table');
            \$(container).closest('.card-body').remove();
        });

        function addRegularDiscountGroup(elm) {
            let container = \$(elm).closest('.discount-group-item');
            let html = container.html();

            discountIdMax = discountIdMax + 1;

            html = html.replace(/regular_discount_matrix_regular_discounts_(\\d+)/mg, 'regular_discount_matrix_regular_discounts_' + discountIdMax);
            html = html.replace(/regular_discount_matrix\\[regular_discounts\\]\\[(\\d+)\\]/mg, 'regular_discount_matrix[regular_discounts][' + discountIdMax + ']');

            let group = \$('<div class=\"discount-group-item\"><div>').html(html);
            group.find('.discount-id').html('ID: ' + discountIdMax + ' <div class=\"group-action group-action-remove\"><i class=\"fas fa-trash-alt\"></i></div>');

            let cardBody = \$('<div class=\"card-body\"></div>').append(group)
            \$('#regular_discount_setting').append(cardBody);

            // set discount_id
            for (let i = 0; i < 3; i++) {
                \$('#regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items_' + i + '_discount_id').val(discountIdMax);
            }
            // reset select box
            \$('select[id^=\"regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items\"]').val('');
            \$('select[id^=\"regular_discount_matrix_regular_discounts_' + discountIdMax + '_regular_discount_items_0_regular_count\"]').val(1);
        }
    });
</script>
{% endblock javascript %}

{% block main %}
    <form role=\"form\" method=\"post\">
        {{ form_widget(form._token) }}

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\" id=\"regular_discount_setting\">
                        <div class=\"card-header\"><span>定期回数別商品金額割引</span></div>
                        {% for regular_discount_form in form.regular_discounts %}
                            <div class=\"card-body\">
                                {% if regular_discount_form.regular_discount_items|length > 0 %}
                                <div class=\"discount-group-item\">
                                    <table>
                                        <tr>
                                            <td rowspan=\"2\" class=\"discount-id\">
                                                ID: {{ regular_discount_form.regular_discount_items[0].vars.value.discount_id }}
                                                <span class=\"group-action {% if loop.index == 1 %}group-action-add{% else %}group-action-remove{% endif %}\">
                                                    {% if loop.index == 1 %}
                                                        <i class=\"fas fa-plus-circle\"></i>
                                                    {% else %}
                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    {% endif %}
                                                </span>
                                            </td>
                                            {% for regular_discount_item_form in regular_discount_form.regular_discount_items %}
                                                {{ form_widget(regular_discount_item_form.discount_id) }}
                                                {{ form_widget(regular_discount_item_form.item_id) }}

                                                {% if loop.index == 1 %}
                                                    <td>
                                                        <div class=\"d-none\">{{ form_widget(regular_discount_item_form.regular_count, {'attr': {'class': \"discount-rate\" }}) }}</div>
                                                        <span>初回から</span>
                                                    </td>
                                                {% else %}
                                                    <td>
                                                        {{ form_widget(regular_discount_item_form.regular_count, {'attr': {'class': \"discount-rate\" }}) }}
                                                        {{ form_errors(regular_discount_item_form.regular_count) }}
                                                        <span>回から</span>
                                                    </td>
                                                {% endif %}
                                            {% endfor %}
                                        </tr>
                                        <tr>
                                            {% for regular_discount_item_form in regular_discount_form.regular_discount_items %}
                                                <td>
                                                    {{ form_widget(regular_discount_item_form.discount_rate, {'attr': {'class': \"discount-rate\" }}) }}
                                                    {{ form_errors(regular_discount_item_form.discount_rate) }}
                                                    %割引
                                                </td>
                                            {% endfor %}
                                        </tr>
                                    </table>
                                </div>
                                {% endif %}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\"></div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'gmo_epsilon.admin.config.save'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/Regular/Setting/discount.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Setting\\discount.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "for" => 101, "if" => 103);
        static $filters = array("escape" => 5, "trans" => 5, "length" => 103);
        static $functions = array("form_widget" => 94, "form_errors" => 129);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'length'],
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
