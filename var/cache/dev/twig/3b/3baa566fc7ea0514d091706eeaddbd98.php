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

/* EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig */
class __TwigTemplate_6923dcd17b14bd1eb30c82600e6cce77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.shopping.credit_card_for_token_payment"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\"
                      action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_credit_card_for_token_payment");
        echo "\"
                      id=\"createTokenForm\"
                      novalidate>
                    <input type='hidden' value='' name='token' id=\"token\" />
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "_token", [], "any", false, false, true, 18), 18, $this->source), 'widget');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "token", [], "any", false, false, true, 19), 19, $this->source), 'widget');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "contract_code", [], "any", false, false, true, 20), 20, $this->source), 'widget');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "contract_code", [], "any", false, false, true, 21), 21, $this->source), 'errors');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, true, 22), 22, $this->source), 'errors');
        echo "
                </form>
                <form method=\"post\" id=\"formSubmit\" action=\"javascript:void(0);\">
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "credit_card_number", [], "any", false, false, true, 28), 28, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "gmo_epsilon.common.credit_card_number"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 31
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "credit_card_number", [], "any", false, false, true, 31), 31, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "credit_card_number", [], "any", false, false, true, 32), 32, $this->source), 'widget');
        echo "
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "credit_card_number", [], "any", false, false, true, 33), 33, $this->source), 'errors');
        echo "
                                </div>
                                <div id=\"credit_card_number_description\" class=\"credit-card-number-description\"></div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "credit_card_number", [], "any", false, false, true, 40), 40, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "gmo_epsilon.common.expiration_date"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-select";
        // line 43
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "expiration_month", [], "any", false, false, true, 43), 43, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "expiration_month", [], "any", false, false, true, 44), 44, $this->source), 'widget');
        echo "
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "expiration_month", [], "any", false, false, true, 45), 45, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"ec-select";
        // line 47
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "expiration_year", [], "any", false, false, true, 47), 47, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "expiration_year", [], "any", false, false, true, 48), 48, $this->source), 'widget');
        echo "
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "expiration_year", [], "any", false, false, true, 49), 49, $this->source), 'errors');
        echo "
                                </div>
                                <div id=\"expiration_description\" class=\"expiration-description\"></div>
                            </dd>
                        </dl>
                        <dl id=\"security_code_item\" class=\"security-code-item\">
                            <dt>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "security_code", [], "any", false, false, true, 56), 56, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "gmo_epsilon.common.security_code"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 59
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "security_code", [], "any", false, false, true, 59), 59, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "security_code", [], "any", false, false, true, 60), 60, $this->source), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "security_code", [], "any", false, false, true, 61), 61, $this->source), 'errors');
        echo "
                                </div>
                                <div id=\"security_code_description\" class=\"security-code-description\"></div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "credit_card_number", [], "any", false, false, true, 68), 68, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "gmo_epsilon.common.holder_name"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 71
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "holder_name", [], "any", false, false, true, 71), 71, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "holder_name", [], "any", false, false, true, 72), 72, $this->source), 'widget');
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "holder_name", [], "any", false, false, true, 73), 73, $this->source), 'errors');
        echo "
                                </div>
                                <div id=\"holder_name_description\" class=\"holder-name-description\"></div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button
                                    id=\"formSubmit\"
                                    type=\"submit\"
                                    class=\"ec-blockBtn--action\"
                                >
                                    購入する
                                </button>
                                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </form>
                ";
        // line 94
        if (array_key_exists("token", $context)) {
            // line 95
            echo "                    <form id='checkoutForm' action='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_checkout");
            echo "' method='post'>
                        ";
            // line 97
            echo "                        <input type='hidden' value='";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 97, $this->source); })()), 97, $this->source), "html", null, true);
            echo "' name='token' id=\"token\" />
                        ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["checkoutForm"]) || array_key_exists("checkoutForm", $context) ? $context["checkoutForm"] : (function () { throw new RuntimeError('Variable "checkoutForm" does not exist.', 98, $this->source); })()), "_token", [], "any", false, false, true, 98), 98, $this->source), 'widget');
            echo "
                    </form>
                ";
        }
        // line 101
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 106
        echo "<script src='";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["url_token_js"]) || array_key_exists("url_token_js", $context) ? $context["url_token_js"] : (function () { throw new RuntimeError('Variable "url_token_js" does not exist.', 106, $this->source); })()), 106, $this->source), "html", null, true);
        echo "'></script>
<script>
    ";
        // line 109
        echo "    const gmo_token_error_messages = {
        \"100\" : \"カード番号に数字以外の文字が含まれています\",
        \"101\" : \"カード番号の桁数が正しくありません\",
        \"110\" : \"有効期限が入力されていません\",
        \"111\" : \"有効期限に数値以外の文字が含まれています\",
        \"112\" : \"有効期限は6又は4ケタで指定してください\",
        \"113\" : \"有効期限は有効な年月を指定してください\",
        \"121\" : \"セキュリティコードに数字以外の文字が含まれています\",
        \"122\" : \"セキュリティコードは4桁以内で指定してください\",
        \"131\" : \"名義人に無効な文字が含まれています\",
        \"132\" : \"名義人は50桁以内で指定してください\",
    };

    const gmo_token_error_element = {
        \"100\" : \"credit_card_number\",
        \"101\" : \"credit_card_number\",
        \"110\" : \"expiration_month\",
        \"111\" : \"expiration_month\",
        \"112\" : \"expiration_month\",
        \"113\" : \"expiration_month\",
        \"121\" : \"security_code\",
        \"122\" : \"security_code\",
        \"131\" : \"holder_name\",
        \"132\" : \"holder_name\",
    };

    function getErrorMessage(error_code) {
        if (typeof gmo_token_error_messages[error_code] == null) {
            return  + \"決済エラーです。\";
        } else {
            return gmo_token_error_messages[error_code];
        }
    }

    function execTrade(response) {
        if (response.resultCode != '000') {
            document.getElementById('credit_card_for_token_payment_token').value = '';
            alert(getErrorMessage(response.resultCode)); // エラーの場合
            document.getElementById(\"credit_card_for_token_payment_\" + gmo_token_error_element[response.resultCode]).focus();
            loadingOverlay('hide');
            return;
        } else {
            ";
        // line 152
        echo "            document.getElementById('credit_card_for_token_payment_token').value = response.tokenObject.token;
            document.getElementById('createTokenForm').submit();
        }
    }
    \$(function() {
        ";
        // line 158
        echo "        \$('#formSubmit').on('submit', function(e) {
            e.preventDefault();
            var cardObj = {};
            var year = document.getElementById('credit_card_for_token_payment_expiration_year').value;
            var month = ('00' + document.getElementById('credit_card_for_token_payment_expiration_month').value).slice(-2)
            cardObj.cardno = document.getElementById('credit_card_for_token_payment_credit_card_number').value;
            cardObj.expire = year + month;
            cardObj.securitycode = document.getElementById('credit_card_for_token_payment_security_code').value;
            cardObj.holdername = document.getElementById('credit_card_for_token_payment_holder_name').value;
            EpsilonToken.init(document.getElementById(\"credit_card_for_token_payment_contract_code\").value);
            EpsilonToken.getToken(cardObj, execTrade);
        });

        ";
        // line 171
        if (array_key_exists("token", $context)) {
            // line 172
            echo "            loadingOverlay();
            document.getElementById('token').value = '";
            // line 173
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 173, $this->source); })()), 173, $this->source), "html", null, true);
            echo "';
            document.getElementById('checkoutForm').submit()
        ";
        }
        // line 176
        echo "    });
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
        return "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig";
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
        return array (  382 => 176,  376 => 173,  373 => 172,  371 => 171,  356 => 158,  349 => 152,  305 => 109,  299 => 106,  289 => 105,  276 => 101,  270 => 98,  265 => 97,  260 => 95,  258 => 94,  248 => 89,  229 => 73,  225 => 72,  221 => 71,  215 => 68,  205 => 61,  201 => 60,  197 => 59,  191 => 56,  181 => 49,  177 => 48,  173 => 47,  168 => 45,  164 => 44,  160 => 43,  154 => 40,  144 => 33,  140 => 32,  136 => 31,  130 => 28,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  98 => 14,  90 => 9,  86 => 7,  76 => 6,  65 => 2,  63 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'default_frame.twig' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}
    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'gmo_epsilon.front.shopping.credit_card_for_token_payment'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\"
                      action=\"{{ url('eccube_payment_lite42_credit_card_for_token_payment') }}\"
                      id=\"createTokenForm\"
                      novalidate>
                    <input type='hidden' value='' name='token' id=\"token\" />
                    {{ form_widget(form._token) }}
                    {{ form_widget(form.token) }}
                    {{ form_widget(form.contract_code) }}
                    {{ form_errors(form.contract_code) }}
                    {{ form_errors(form.token) }}
                </form>
                <form method=\"post\" id=\"formSubmit\" action=\"javascript:void(0);\">
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.credit_card_number, 'gmo_epsilon.common.credit_card_number', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.credit_card_number) ? ' error' }}\">
                                    {{ form_widget(form.credit_card_number) }}
                                    {{ form_errors(form.credit_card_number) }}
                                </div>
                                <div id=\"credit_card_number_description\" class=\"credit-card-number-description\"></div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.credit_card_number, 'gmo_epsilon.common.expiration_date', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-select{{ has_errors(form.expiration_month) ? ' error' }}\">
                                    {{ form_widget(form.expiration_month) }}
                                    {{ form_errors(form.expiration_month) }}
                                </div>
                                <div class=\"ec-select{{ has_errors(form.expiration_year) ? ' error' }}\">
                                    {{ form_widget(form.expiration_year) }}
                                    {{ form_errors(form.expiration_year) }}
                                </div>
                                <div id=\"expiration_description\" class=\"expiration-description\"></div>
                            </dd>
                        </dl>
                        <dl id=\"security_code_item\" class=\"security-code-item\">
                            <dt>
                                {{ form_label(form.security_code, 'gmo_epsilon.common.security_code', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.security_code) ? ' error' }}\">
                                    {{ form_widget(form.security_code) }}
                                    {{ form_errors(form.security_code) }}
                                </div>
                                <div id=\"security_code_description\" class=\"security-code-description\"></div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.credit_card_number, 'gmo_epsilon.common.holder_name', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.holder_name) ? ' error' }}\">
                                    {{ form_widget(form.holder_name) }}
                                    {{ form_errors(form.holder_name) }}
                                </div>
                                <div id=\"holder_name_description\" class=\"holder-name-description\"></div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button
                                    id=\"formSubmit\"
                                    type=\"submit\"
                                    class=\"ec-blockBtn--action\"
                                >
                                    購入する
                                </button>
                                <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'common.back'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </form>
                {% if token is defined %}
                    <form id='checkoutForm' action='{{ url('shopping_checkout') }}' method='post'>
                        {# 取得したトークンを設定するプレースホルダ #}
                        <input type='hidden' value='{{ token }}' name='token' id=\"token\" />
                        {{ form_widget(checkoutForm._token) }}
                    </form>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
{% block javascript %}
<script src='{{ url_token_js }}'></script>
<script>
    {# トークンを送信 #}
    const gmo_token_error_messages = {
        \"100\" : \"カード番号に数字以外の文字が含まれています\",
        \"101\" : \"カード番号の桁数が正しくありません\",
        \"110\" : \"有効期限が入力されていません\",
        \"111\" : \"有効期限に数値以外の文字が含まれています\",
        \"112\" : \"有効期限は6又は4ケタで指定してください\",
        \"113\" : \"有効期限は有効な年月を指定してください\",
        \"121\" : \"セキュリティコードに数字以外の文字が含まれています\",
        \"122\" : \"セキュリティコードは4桁以内で指定してください\",
        \"131\" : \"名義人に無効な文字が含まれています\",
        \"132\" : \"名義人は50桁以内で指定してください\",
    };

    const gmo_token_error_element = {
        \"100\" : \"credit_card_number\",
        \"101\" : \"credit_card_number\",
        \"110\" : \"expiration_month\",
        \"111\" : \"expiration_month\",
        \"112\" : \"expiration_month\",
        \"113\" : \"expiration_month\",
        \"121\" : \"security_code\",
        \"122\" : \"security_code\",
        \"131\" : \"holder_name\",
        \"132\" : \"holder_name\",
    };

    function getErrorMessage(error_code) {
        if (typeof gmo_token_error_messages[error_code] == null) {
            return  + \"決済エラーです。\";
        } else {
            return gmo_token_error_messages[error_code];
        }
    }

    function execTrade(response) {
        if (response.resultCode != '000') {
            document.getElementById('credit_card_for_token_payment_token').value = '';
            alert(getErrorMessage(response.resultCode)); // エラーの場合
            document.getElementById(\"credit_card_for_token_payment_\" + gmo_token_error_element[response.resultCode]).focus();
            loadingOverlay('hide');
            return;
        } else {
            {# フォームに値を設定 #}
            document.getElementById('credit_card_for_token_payment_token').value = response.tokenObject.token;
            document.getElementById('createTokenForm').submit();
        }
    }
    \$(function() {
        {# トークン発行 #}
        \$('#formSubmit').on('submit', function(e) {
            e.preventDefault();
            var cardObj = {};
            var year = document.getElementById('credit_card_for_token_payment_expiration_year').value;
            var month = ('00' + document.getElementById('credit_card_for_token_payment_expiration_month').value).slice(-2)
            cardObj.cardno = document.getElementById('credit_card_for_token_payment_credit_card_number').value;
            cardObj.expire = year + month;
            cardObj.securitycode = document.getElementById('credit_card_for_token_payment_security_code').value;
            cardObj.holdername = document.getElementById('credit_card_for_token_payment_holder_name').value;
            EpsilonToken.init(document.getElementById(\"credit_card_for_token_payment_contract_code\").value);
            EpsilonToken.getToken(cardObj, execTrade);
        });

        {% if token is defined %}
            loadingOverlay();
            document.getElementById('token').value = '{{ token }}';
            document.getElementById('checkoutForm').submit()
        {% endif %}
    });
</script>
{% endblock javascript %}
", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_for_token_payment.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\credit_card_for_token_payment.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 4, "if" => 94);
        static $filters = array("escape" => 9, "trans" => 9);
        static $functions = array("url" => 14, "form_widget" => 18, "form_errors" => 21, "form_label" => 28, "has_errors" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'has_errors']
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
