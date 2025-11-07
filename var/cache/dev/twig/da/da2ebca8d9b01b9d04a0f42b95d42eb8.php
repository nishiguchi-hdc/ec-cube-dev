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

/* Shopping/login.twig */
class __TwigTemplate_a52f0c76efdf7755b062309df98a2784 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/login.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/login.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/login.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-grid3\">

            <div class=\"ec-grid3__cell2\">
                <form name=\"shopping_login\" id=\"shopping_login\" method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
        echo "\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" />
                    <input type=\"hidden\" name=\"_failure_path\" value=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_login");
        echo "\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "login_email", [], "any", false, false, true, 37), 37, $this->source), 'widget', ["attr" => ["style" => "ime-mode: disabled;", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "autofocus" => true]]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "login_pass", [], "any", false, false, true, 38), 38, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスワード")]]);
        echo "
                            </div>
                            ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 40, $this->source); })()), "option_remember_me", [], "any", false, false, true, 40)) {
            // line 41
            echo "                            <div class=\"ec-checkbox\">
                                <label>
                                    ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 44
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 46
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "login_memory", [], "any", false, false, true, 46), 46, $this->source), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次回から自動的にログインする")]);
                echo "
                                    ";
            }
            // line 48
            echo "                                </label>
                            </div>
                            ";
        }
        // line 51
        echo "                        </div>
                        ";
        // line 52
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "                            <p class=\"ec-errorMessage\">";
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, true, 53), 53, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, true, 53), 53, $this->source), "validators"), "html", null, true));
            echo "</p>
                        ";
        }
        // line 55
        echo "                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("forgot");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン情報をお忘れですか？"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            ";
        // line 72
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            // line 73
            echo "                <div class=\"ec-grid3__cell\">
                    <div class=\"ec-guest\">
                        <div class=\"ec-guest__inner\">
                            <p>";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録をせずに購入手続きをされたい方は、下記よりお進みください。"), "html", null, true);
            echo "</p>
                            <div class=\"ec-guest__actions\"><a class=\"ec-blockBtn--cancel\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_nonmember");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ゲスト購入"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 83
        echo "
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
        return "Shopping/login.twig";
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
        return array (  223 => 83,  212 => 77,  208 => 76,  203 => 73,  201 => 72,  188 => 64,  181 => 62,  174 => 58,  169 => 55,  163 => 53,  161 => 52,  158 => 51,  153 => 48,  147 => 46,  143 => 44,  141 => 43,  137 => 41,  135 => 40,  130 => 38,  126 => 37,  119 => 33,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  90 => 19,  85 => 16,  75 => 15,  64 => 11,  62 => 13,  37 => 11,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'cart_page' %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'ログイン'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-grid3\">

            <div class=\"ec-grid3__cell2\">
                <form name=\"shopping_login\" id=\"shopping_login\" method=\"post\" action=\"{{ url('mypage_login') }}\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ url('shopping') }}\" />
                    <input type=\"hidden\" name=\"_failure_path\" value=\"{{ url('shopping_login') }}\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"{{ asset('assets/icon/user.svg') }}\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                {{ form_widget(form.login_email, { attr: { 'style' : 'ime-mode: disabled;', placeholder: 'メールアドレス'|trans, 'autofocus': true }}) }}
                                {{ form_widget(form.login_pass, { attr: { placeholder: 'パスワード'|trans }}) }}
                            </div>
                            {% if BaseInfo.option_remember_me %}
                            <div class=\"ec-checkbox\">
                                <label>
                                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    {% else %}
                                        {{ form_widget(form.login_memory, { 'label': '次回から自動的にログインする'|trans }) }}
                                    {% endif %}
                                </label>
                            </div>
                            {% endif %}
                        </div>
                        {% if error %}
                            <p class=\"ec-errorMessage\">{{ error.messageKey|trans(error.messageData, 'validators')|nl2br }}</p>
                        {% endif %}
                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">{{ 'ログイン'|trans}}</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"{{ url('forgot') }}\">{{ 'ログイン情報をお忘れですか？'|trans}}</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"{{ url('entry') }}\">{{ '新規会員登録'|trans}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') == false %}
                <div class=\"ec-grid3__cell\">
                    <div class=\"ec-guest\">
                        <div class=\"ec-guest__inner\">
                            <p>{{ '会員登録をせずに購入手続きをされたい方は、下記よりお進みください。'|trans }}</p>
                            <div class=\"ec-guest__actions\"><a class=\"ec-blockBtn--cancel\" href=\"{{ url('shopping_nonmember') }}\">{{ 'ゲスト購入'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>
    </div>
{% endblock %}
", "Shopping/login.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\login.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 40);
        static $filters = array("escape" => 19, "trans" => 19, "nl2br" => 53);
        static $functions = array("url" => 27, "csrf_token" => 30, "asset" => 33, "form_widget" => 37, "is_granted" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'nl2br'],
                ['url', 'csrf_token', 'asset', 'form_widget', 'is_granted']
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
