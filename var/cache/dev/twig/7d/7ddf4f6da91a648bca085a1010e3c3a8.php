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

/* EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig */
class __TwigTemplate_b2a725ab8dc5d287346594ea4aad2de0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig"));

        // line 2
        echo "    ";
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 2, $this->source); })()), 2, $this->source));
        echo "の受注作成バッチ実行結果は以下の通りです。

    受注作成処理件数：";
        // line 4
        echo $this->sandbox->ensureToStringAllowed((isset($context["numberOfRegularOrders"]) || array_key_exists("numberOfRegularOrders", $context) ? $context["numberOfRegularOrders"] : (function () { throw new RuntimeError('Variable "numberOfRegularOrders" does not exist.', 4, $this->source); })()), 4, $this->source);
        echo "
    受注作成処理完了件数：";
        // line 5
        echo $this->sandbox->ensureToStringAllowed((isset($context["numberOfCompletedOrder"]) || array_key_exists("numberOfCompletedOrder", $context) ? $context["numberOfCompletedOrder"] : (function () { throw new RuntimeError('Variable "numberOfCompletedOrder" does not exist.', 5, $this->source); })()), 5, $this->source);
        echo "
    決済エラー数：";
        // line 6
        echo $this->sandbox->ensureToStringAllowed((isset($context["numberOfPaymentError"]) || array_key_exists("numberOfPaymentError", $context) ? $context["numberOfPaymentError"] : (function () { throw new RuntimeError('Variable "numberOfPaymentError" does not exist.', 6, $this->source); })()), 6, $this->source);
        echo "
    システムエラー数：";
        // line 7
        echo $this->sandbox->ensureToStringAllowed((isset($context["numberOfSystemError"]) || array_key_exists("numberOfSystemError", $context) ? $context["numberOfSystemError"] : (function () { throw new RuntimeError('Variable "numberOfSystemError" does not exist.', 7, $this->source); })()), 7, $this->source);
        echo "

    【決済エラー詳細】
    決済エラーとなった定期は定期受注管理画面からカード変更依頼メール一括通知を実施してください。
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PaymentErrorRegularOrders"]) || array_key_exists("PaymentErrorRegularOrders", $context) ? $context["PaymentErrorRegularOrders"] : (function () { throw new RuntimeError('Variable "PaymentErrorRegularOrders" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["RegularOrder"]) {
            // line 12
            echo "    定期受注ID：";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 12), 12, $this->source);
            echo "
    ご注文者氏名：";
            // line 13
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "name01", [], "any", false, false, true, 13), 13, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "name02", [], "any", false, false, true, 13), 13, $this->source);
            echo "
    メールアドレス：";
            // line 14
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "email", [], "any", false, false, true, 14), 14, $this->source);
            echo "
";
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
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
        return "EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig";
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
        return array (  107 => 17,  101 => 16,  97 => 14,  91 => 13,  86 => 12,  82 => 11,  75 => 7,  71 => 6,  67 => 5,  63 => 4,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ now|date_min }}の受注作成バッチ実行結果は以下の通りです。

    受注作成処理件数：{{ numberOfRegularOrders }}
    受注作成処理完了件数：{{ numberOfCompletedOrder }}
    決済エラー数：{{ numberOfPaymentError }}
    システムエラー数：{{ numberOfSystemError }}

    【決済エラー詳細】
    決済エラーとなった定期は定期受注管理画面からカード変更依頼メール一括通知を実施してください。
    {% for RegularOrder in PaymentErrorRegularOrders %}
    定期受注ID：{{ RegularOrder.id }}
    ご注文者氏名：{{ RegularOrder.name01 }} {{ RegularOrder.name02 }}
    メールアドレス：{{ RegularOrder.email }}
{#    エラー内容：エラーコード: A081010401 受付番号の設定がありません。#}
    {% endfor %}

{% endautoescape %}
", "EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mail\\order_creation_batch_result_mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 1, "for" => 11);
        static $filters = array("date_min" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'for'],
                ['date_min'],
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
