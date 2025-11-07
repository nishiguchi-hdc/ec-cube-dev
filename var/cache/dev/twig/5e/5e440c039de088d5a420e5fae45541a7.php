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

/* EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig */
class __TwigTemplate_84ee8fcfe63e49e3737d1032a4d5d635 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig"));

        // line 3
        $context["mypageno"] = "regular_list";
        // line 4
        $context["regular_mypage_no"] = "regular_shipping";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 8
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_shipping"), "html", null, true);
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
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\"
                      action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_shipping", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, true, 31)]), "html", null, true);
        echo "\"
                      novalidate
                      class=\"h-adr\">
                    <div class=\"ec-editRole\">
                        <div class=\"ec-off1Grid\">
                            <div class=\"ec-off1Grid__cell\">
                                <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "_token", [], "any", false, false, true, 38), 38, $this->source), 'widget');
        echo "
                                <div class=\"ec-borderedDefs\">
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">お名前</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput";
        // line 46
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, true, 46), "name01", [], "any", false, false, true, 46), 46, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, true, 46), "name02", [], "any", false, false, true, 46), 46, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, true, 47), "name01", [], "any", false, false, true, 47), 47, $this->source), 'widget', ["attr" => ["placeholder" => "common.last_name"]]);
        echo "
                                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, true, 48), "name02", [], "any", false, false, true, 48), 48, $this->source), 'widget', ["attr" => ["placeholder" => "common.first_name"]]);
        echo "
                                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, true, 49), "name01", [], "any", false, false, true, 49), 49, $this->source), 'errors');
        echo "
                                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, true, 50), "name02", [], "any", false, false, true, 50), 50, $this->source), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">お名前(カナ)</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput";
        // line 60
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "kana", [], "any", false, false, true, 60), "kana01", [], "any", false, false, true, 60), 60, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "kana", [], "any", false, false, true, 60), "kana02", [], "any", false, false, true, 60), 60, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "kana", [], "any", false, false, true, 61), "kana01", [], "any", false, false, true, 61), 61, $this->source), 'widget', ["attr" => ["placeholder" => "common.last_name_kana"]]);
        echo "
                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "kana", [], "any", false, false, true, 62), "kana02", [], "any", false, false, true, 62), 62, $this->source), 'widget', ["attr" => ["placeholder" => "common.first_name_kana"]]);
        echo "
                                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "kana", [], "any", false, false, true, 63), "kana01", [], "any", false, false, true, 63), 63, $this->source), 'errors');
        echo "
                                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "kana", [], "any", false, false, true, 64), "kana02", [], "any", false, false, true, 64), 64, $this->source), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label\" for=\"shipping_company_name\">会社名</label>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput";
        // line 73
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "company_name", [], "any", false, false, true, 73), 73, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "company_name", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
                                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "company_name", [], "any", false, false, true, 75), 75, $this->source), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">住所</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-zipInput";
        // line 85
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "postal_code", [], "any", false, false, true, 85), 85, $this->source))) ? (" error") : (""));
        echo "\">
                                                <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo "</span>
                                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "postal_code", [], "any", false, false, true, 87), 87, $this->source), 'widget');
        echo "
                                                <div class=\"ec-zipInputHelp\">
                                                    <div class=\"ec-zipInputHelp__icon\">
                                                        <div class=\"ec-icon\">
                                                            <img
                                                                src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\"
                                                                alt=\"\" />
                                                        </div>
                                                    </div>
                                                    <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                        <span>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.search_postal_code"), "html", null, true);
        echo "</span>
                                                    </a>
                                                </div>
                                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "postal_code", [], "any", false, false, true, 100), 100, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"ec-select";
        // line 102
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "address", [], "any", false, false, true, 102), "pref", [], "any", false, false, true, 102), 102, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, true, 103), "pref", [], "any", false, false, true, 103), 103, $this->source), 'widget');
        echo "
                                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "address", [], "any", false, false, true, 104), "pref", [], "any", false, false, true, 104), 104, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"ec-input";
        // line 106
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "address", [], "any", false, false, true, 106), "addr01", [], "any", false, false, true, 106), 106, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "address", [], "any", false, false, true, 107), "addr01", [], "any", false, false, true, 107), 107, $this->source), 'widget', ["attr" => ["placeholder" => "common.address_sample_01"]]);
        echo "
                                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "address", [], "any", false, false, true, 108), "addr01", [], "any", false, false, true, 108), 108, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"ec-input";
        // line 110
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "address", [], "any", false, false, true, 110), "addr02", [], "any", false, false, true, 110), 110, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "address", [], "any", false, false, true, 111), "addr02", [], "any", false, false, true, 111), 111, $this->source), 'widget', ["attr" => ["placeholder" => "common.address_sample_02"]]);
        echo "
                                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "address", [], "any", false, false, true, 112), "addr02", [], "any", false, false, true, 112), 112, $this->source), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\" for=\"shipping_phone_number\">電話番号</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-telInput";
        // line 122
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "phone_number", [], "any", false, false, true, 122), 122, $this->source))) ? (" error") : (""));
        echo "\">
                                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "phone_number", [], "any", false, false, true, 123), 123, $this->source), 'widget');
        echo "
                                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "phone_number", [], "any", false, false, true, 124), 124, $this->source), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                </div>

                            </div>
                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">登録する</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 147
        echo "<script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig";
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
        return array (  372 => 147,  362 => 146,  331 => 124,  327 => 123,  323 => 122,  310 => 112,  306 => 111,  302 => 110,  297 => 108,  293 => 107,  289 => 106,  284 => 104,  280 => 103,  276 => 102,  271 => 100,  265 => 97,  257 => 92,  249 => 87,  245 => 86,  241 => 85,  228 => 75,  224 => 74,  220 => 73,  208 => 64,  204 => 63,  200 => 62,  196 => 61,  192 => 60,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  163 => 46,  152 => 38,  142 => 31,  127 => 19,  120 => 17,  116 => 15,  106 => 14,  93 => 11,  83 => 10,  72 => 1,  70 => 8,  68 => 6,  66 => 4,  64 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'regular_list' %}
{% set regular_mypage_no = 'regular_shipping' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% set body_class = 'mypage' %}

{% block stylesheet %}
    {{ include('@EccubePaymentLite42/default/Mypage/RegularNav/style.twig') }}
{% endblock stylesheet %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.regular_shipping'|trans }}</h1>
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
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\"
                      action=\"{{ url('eccube_payment_lite42_mypage_regular_shipping', { id: RegularOrder.id }) }}\"
                      novalidate
                      class=\"h-adr\">
                    <div class=\"ec-editRole\">
                        <div class=\"ec-off1Grid\">
                            <div class=\"ec-off1Grid__cell\">
                                <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                {{ form_widget(form._token) }}
                                <div class=\"ec-borderedDefs\">
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">お名前</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error'}}\">
                                                {{ form_widget(form.name.name01, { 'attr': { 'placeholder': 'common.last_name' }}) }}
                                                {{ form_widget(form.name.name02, { 'attr': { 'placeholder': 'common.first_name' }}) }}
                                                {{ form_errors(form.name.name01) }}
                                                {{ form_errors(form.name.name02) }}
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">お名前(カナ)</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                                                {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'common.last_name_kana' }}) }}
                                                {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'common.first_name_kana' }}) }}
                                                {{ form_errors(form.kana.kana01) }}
                                                {{ form_errors(form.kana.kana02) }}
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label\" for=\"shipping_company_name\">会社名</label>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-halfInput{{ has_errors(form.company_name) ? ' error' }}\">
                                                {{ form_widget(form.company_name) }}
                                                {{ form_errors(form.company_name) }}
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\">住所</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\">
                                                <span>{{ 'common.postal_symbol'|trans }}</span>
                                                {{ form_widget(form.postal_code) }}
                                                <div class=\"ec-zipInputHelp\">
                                                    <div class=\"ec-zipInputHelp__icon\">
                                                        <div class=\"ec-icon\">
                                                            <img
                                                                src=\"{{ asset('assets/icon/question-white.svg') }}\"
                                                                alt=\"\" />
                                                        </div>
                                                    </div>
                                                    <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                        <span>{{ 'common.search_postal_code'|trans }}</span>
                                                    </a>
                                                </div>
                                                {{ form_errors(form.postal_code) }}
                                            </div>
                                            <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                                                {{ form_widget(form.address.pref) }}
                                                {{ form_errors(form.address.pref) }}
                                            </div>
                                            <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                                                {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': 'common.address_sample_01' }}) }}
                                                {{ form_errors(form.address.addr01) }}
                                            </div>
                                            <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                                                {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': 'common.address_sample_02' }}) }}
                                                {{ form_errors(form.address.addr02) }}
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <label class=\"ec-label required\" for=\"shipping_phone_number\">電話番号</label>
                                            <span class=\"ec-required\">必須</span>
                                        </dt>
                                        <dd>
                                            <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                                                {{ form_widget(form.phone_number) }}
                                                {{ form_errors(form.phone_number) }}
                                            </div>
                                        </dd>
                                    </dl>
                                </div>

                            </div>
                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">登録する</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascript %}
<script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}
", "EccubePaymentLite42/Resource/template/default/Mypage/regular_shipping.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\regular_shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 6);
        static $filters = array("escape" => 17, "trans" => 17);
        static $functions = array("include" => 11, "url" => 31, "form_widget" => 38, "has_errors" => 46, "form_errors" => 49, "asset" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['include', 'url', 'form_widget', 'has_errors', 'form_errors', 'asset']
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
