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

/* EccubePaymentLite42/Resource/template/admin/Product/add_free_area_description_form.twig */
class __TwigTemplate_643862f531e83cf6cbd69cc3b9832dda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/add_free_area_description_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/add_free_area_description_form.twig"));

        // line 1
        echo "<script>
    function changeRegularCycleFormHandle(selectedSaleTypeId, regularSaleTypeId) {
        if (selectedSaleTypeId === regularSaleTypeId) {
            \$('#admin_product_free_description_about_quantity').prop('disabled', false);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', false);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', false);
        } else {
            \$('#admin_product_free_description_about_quantity').prop('disabled', true);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', true);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', true);
        }
    }
    \$(function() {
        ";
        // line 15
        echo "        \$('#freeArea').parent().after(\$('#free_description_box'));


        var regularSaleTypeId = '";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["regularSaleTypeId"]) || array_key_exists("regularSaleTypeId", $context) ? $context["regularSaleTypeId"] : (function () { throw new RuntimeError('Variable "regularSaleTypeId" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
        echo "';
        ";
        // line 20
        echo "        changeRegularCycleFormHandle(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);
        ";
        // line 22
        echo "        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularCycleFormHandle(selectedSaleTypeId, regularSaleTypeId);
        });

        var sale_type_flg = '";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["sale_type_flg"]) || array_key_exists("sale_type_flg", $context) ? $context["sale_type_flg"] : (function () { throw new RuntimeError('Variable "sale_type_flg" does not exist.', 27, $this->source); })()), 27, $this->source), "html", null, true);
        echo "';
        if(sale_type_flg){
            \$('#admin_product_free_description_about_quantity').prop('disabled', false);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', false);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', false);
        }
    });
</script>

<div id=\"free_description_box\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"特定商法取引に関する項目\">
                    <span class=\"card-title\">特定商法取引に関する項目</span>
                    <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                </div>
            </div>
            <div class=\"col-4 text-end\">
                <a data-bs-toggle=\"collapse\" href=\"#free_description\" aria-expanded=\"false\" aria-controls=\"free_description\">
                    <i class=\"fa fa-angle-up fa-lg\"></i>
                </a>
            </div>
        </div>
    </div>
    <div id=\"free_description\">
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_about_quantity\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>分量に関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "free_description_about_quantity", [], "any", false, false, true, 61), 61, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => "入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続"]]);
        echo "
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "free_description_about_quantity", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_about_selling_price\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>販売価格に関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "free_description_about_selling_price", [], "any", false, false, true, 76), 76, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => "入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続"]]);
        echo "
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "free_description_about_selling_price", [], "any", false, false, true, 77), 77, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_of_payment_delivery\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>お支払い・引き渡しに関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "free_description_of_payment_delivery", [], "any", false, false, true, 91), 91, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => "入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続"]]);
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "free_description_of_payment_delivery", [], "any", false, false, true, 92), 92, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Product/add_free_area_description_form.twig";
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
        return array (  174 => 92,  170 => 91,  153 => 77,  149 => 76,  132 => 62,  128 => 61,  91 => 27,  84 => 22,  81 => 20,  77 => 18,  72 => 15,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function changeRegularCycleFormHandle(selectedSaleTypeId, regularSaleTypeId) {
        if (selectedSaleTypeId === regularSaleTypeId) {
            \$('#admin_product_free_description_about_quantity').prop('disabled', false);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', false);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', false);
        } else {
            \$('#admin_product_free_description_about_quantity').prop('disabled', true);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', true);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', true);
        }
    }
    \$(function() {
        {# 定期サイクルフォームの追加 #}
        \$('#freeArea').parent().after(\$('#free_description_box'));


        var regularSaleTypeId = '{{ regularSaleTypeId }}';
        {# 定期サイクルフォーム初期読み込み時、使用可、不可を設定 #}
        changeRegularCycleFormHandle(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);
        {# 販売種別変更時に、定期サイクルフォームの使用可、不可を設定 #}
        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularCycleFormHandle(selectedSaleTypeId, regularSaleTypeId);
        });

        var sale_type_flg = '{{ sale_type_flg }}';
        if(sale_type_flg){
            \$('#admin_product_free_description_about_quantity').prop('disabled', false);
            \$('#admin_product_free_description_about_selling_price').prop('disabled', false);
            \$('#admin_product_free_description_of_payment_delivery').prop('disabled', false);
        }
    });
</script>

<div id=\"free_description_box\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"特定商法取引に関する項目\">
                    <span class=\"card-title\">特定商法取引に関する項目</span>
                    <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                </div>
            </div>
            <div class=\"col-4 text-end\">
                <a data-bs-toggle=\"collapse\" href=\"#free_description\" aria-expanded=\"false\" aria-controls=\"free_description\">
                    <i class=\"fa fa-angle-up fa-lg\"></i>
                </a>
            </div>
        </div>
    </div>
    <div id=\"free_description\">
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_about_quantity\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>分量に関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            {{ form_widget(form.free_description_about_quantity, {attr : { rows : \"8\", placeholder : '入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続'} }) }}
                            {{ form_errors(form.free_description_about_quantity) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_about_selling_price\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>販売価格に関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            {{ form_widget(form.free_description_about_selling_price, {attr : { rows : \"8\" ,placeholder : '入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続' } }) }}
                            {{ form_errors(form.free_description_about_selling_price) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"free_description_of_payment_delivery\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <span>お支払い・引き渡しに関するフリー記述</span>
                    </div>
                    <div class=\"col-9\">
                        <div>
                            {{ form_widget(form.free_description_of_payment_delivery, {attr : { rows : \"8\", placeholder : '入力例）購入者が定期購入を解除した場合、または商品販売が終了するまで自動継続'} }) }}
                            {{ form_errors(form.free_description_of_payment_delivery) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "EccubePaymentLite42/Resource/template/admin/Product/add_free_area_description_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Product\\add_free_area_description_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 18);
        static $functions = array("form_widget" => 61, "form_errors" => 62);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
