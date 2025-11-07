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

/* Shopping/shipping_edit.twig */
class __TwigTemplate_49446d0b1f9616f55f54ff0f4d8ad3e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_edit.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 15
        $context["body_class"] = "cart_page";
        // line 17
        if (twig_test_empty($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 18
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品購入/お届け先の変更");
        }
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の追加"), "html", null, true);
            echo "</h1>
            ";
        } else {
            // line 32
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の変更"), "html", null, true);
            echo "</h1>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_edit", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 41, $this->source); })())]), "html", null, true);
        echo "\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "_token", [], "any", false, false, true, 43), 43, $this->source), 'widget');
        echo "
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, true, 47), 47, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 50
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, true, 50), "name01", [], "any", false, false, true, 50), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, true, 50), "name02", [], "any", false, false, true, 50), 50, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, true, 51), "name01", [], "any", false, false, true, 51), 51, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, true, 52), "name02", [], "any", false, false, true, 52), 52, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, true, 53), "name01", [], "any", false, false, true, 53), 53, $this->source), 'errors');
        echo "
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, true, 54), "name02", [], "any", false, false, true, 54), 54, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "kana", [], "any", false, false, true, 60), 60, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 63
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "kana", [], "any", false, false, true, 63), "kana01", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "kana", [], "any", false, false, true, 63), "kana02", [], "any", false, false, true, 63), 63, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "kana", [], "any", false, false, true, 64), "kana01", [], "any", false, false, true, 64), 64, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "kana", [], "any", false, false, true, 65), "kana02", [], "any", false, false, true, 65), 65, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "kana", [], "any", false, false, true, 66), "kana01", [], "any", false, false, true, 66), 66, $this->source), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "kana", [], "any", false, false, true, 67), "kana02", [], "any", false, false, true, 67), 67, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "company_name", [], "any", false, false, true, 73), 73, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 76
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "company_name", [], "any", false, false, true, 76), 76, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "company_name", [], "any", false, false, true, 77), 77, $this->source), 'widget');
        echo "
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "company_name", [], "any", false, false, true, 78), 78, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "address", [], "any", false, false, true, 84), 84, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput";
        // line 87
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "postal_code", [], "any", false, false, true, 87), 87, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "postal_code", [], "any", false, false, true, 88), 88, $this->source), 'widget');
        echo "
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                        </div>
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "postal_code", [], "any", false, false, true, 96), 96, $this->source), 'errors');
        echo "
                                    </div>

                                    <div class=\"ec-select";
        // line 99
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, true, 99), "pref", [], "any", false, false, true, 99), 99, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "address", [], "any", false, false, true, 100), "pref", [], "any", false, false, true, 100), 100, $this->source), 'widget');
        echo "
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "address", [], "any", false, false, true, 101), "pref", [], "any", false, false, true, 101), 101, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 103
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, true, 103), "addr01", [], "any", false, false, true, 103), 103, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "address", [], "any", false, false, true, 104), "addr01", [], "any", false, false, true, 104), 104, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "address", [], "any", false, false, true, 105), "addr01", [], "any", false, false, true, 105), 105, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 107
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "address", [], "any", false, false, true, 107), "addr02", [], "any", false, false, true, 107), 107, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "address", [], "any", false, false, true, 108), "addr02", [], "any", false, false, true, 108), 108, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "address", [], "any", false, false, true, 109), "addr02", [], "any", false, false, true, 109), 109, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "phone_number", [], "any", false, false, true, 115), 115, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput";
        // line 118
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "phone_number", [], "any", false, false, true, 118), 118, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "phone_number", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo "
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "phone_number", [], "any", false, false, true, 120), 120, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            ";
        // line 125
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 125), "eccube_form_options", [], "any", false, false, true, 125), "auto_render", [], "any", false, false, true, 125); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 126
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 126), "eccube_form_options", [], "any", false, false, true, 126), "form_theme", [], "any", false, false, true, 126)) {
                // line 127
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 127), "eccube_form_options", [], "any", false, false, true, 127), "form_theme", [], "any", false, false, true, 127)], true);
                // line 128
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 128, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 130
                echo "                                    <dl>
                                        <dt>
                                            ";
                // line 132
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 132), "label_attr", [], "any", false, true, true, 132), "class", [], "any", true, true, true, 132)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 132), "label_attr", [], "any", false, false, true, 132), "class", [], "any", false, false, true, 132)) : (""));
                // line 133
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 133, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 133, $this->source); })()), 133, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 133), "label", [], "any", false, false, true, 133), 133, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                        </dt>
                                        <dd>
                                            <div class=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 136), "eccube_form_options", [], "any", false, false, true, 136), "style_class", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 136, $this->source))) ? (" error") : (""));
                echo "\">
                                                ";
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 137, $this->source), 'widget');
                echo "
                                                ";
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 138, $this->source), 'errors');
                echo "
                                            </div>
                                        </dd>
                                    </dl>
                                ";
            }
            // line 143
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                    ";
        // line 149
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 150
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 150, $this->source); })())]), "html", null, true);
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 152
            echo "                                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 154
        echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
        return "Shopping/shipping_edit.twig";
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
        return array (  419 => 154,  411 => 152,  403 => 150,  401 => 149,  397 => 148,  391 => 144,  385 => 143,  377 => 138,  373 => 137,  368 => 136,  361 => 133,  359 => 132,  355 => 130,  349 => 128,  346 => 127,  343 => 126,  338 => 125,  331 => 120,  327 => 119,  323 => 118,  317 => 115,  308 => 109,  304 => 108,  300 => 107,  295 => 105,  291 => 104,  287 => 103,  282 => 101,  278 => 100,  274 => 99,  268 => 96,  263 => 94,  258 => 92,  251 => 88,  245 => 87,  239 => 84,  230 => 78,  226 => 77,  222 => 76,  216 => 73,  207 => 67,  203 => 66,  199 => 65,  195 => 64,  191 => 63,  185 => 60,  176 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  154 => 47,  147 => 43,  142 => 41,  133 => 34,  127 => 32,  121 => 30,  119 => 29,  114 => 26,  104 => 25,  93 => 22,  83 => 21,  72 => 11,  69 => 18,  67 => 17,  65 => 15,  63 => 13,  38 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% set body_class = 'cart_page' %}
{# ログイン状態によって、表示内容を切替 #}
{% if is_granted('ROLE_USER') is empty %}
    {% set title = '商品購入/お届け先の変更'|trans %}
{% endif %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            {% if is_granted('ROLE_USER') %}
                <h1>{{ 'お届け先の追加'|trans }}</h1>
            {% else %}
                <h1>{{ 'お届け先の変更'|trans }}</h1>
            {% endif %}
        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"{{ url('shopping_shipping_edit', {'id': shippingId}) }}\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        {{ form_widget(form._token) }}
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error'}}\">
                                        {{ form_widget(form.name.name01, { 'attr': { 'placeholder': '姓' }}) }}
                                        {{ form_widget(form.name.name02, { 'attr': { 'placeholder': '名' }}) }}
                                        {{ form_errors(form.name.name01) }}
                                        {{ form_errors(form.name.name02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                                        {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'セイ' }}) }}
                                        {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'メイ' }}) }}
                                        {{ form_errors(form.kana.kana01) }}
                                        {{ form_errors(form.kana.kana02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label' }}) }}
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
                                    {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\"><span>{{ '〒'|trans }}</span>
                                        {{ form_widget(form.postal_code) }}
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ '郵便番号検索'|trans }}</span></a>
                                        </div>
                                        {{ form_errors(form.postal_code) }}
                                    </div>

                                    <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                                        {{ form_widget(form.address.pref) }}
                                        {{ form_errors(form.address.pref) }}
                                    </div>
                                    <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                                        {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': '市区町村名(例：大阪市北区)' }}) }}
                                        {{ form_errors(form.address.addr01) }}
                                    </div>
                                    <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                                        {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': '番地・ビル名(例：西梅田1丁目6-8)' }}) }}
                                        {{ form_errors(form.address.addr02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                                        {{ form_widget(form.phone_number) }}
                                        {{ form_errors(form.phone_number) }}
                                    </div>
                                </dd>
                            </dl>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <dl>
                                        <dt>
                                            {% set label_class =  f.vars.label_attr.class is defined ? f.vars.label_attr.class : '' %}
                                            {{ form_label(f, f.vars.label, { 'label_attr': {'class': label_class ~ ' ec-label' }}) }}
                                        </dt>
                                        <dd>
                                            <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </dd>
                                    </dl>
                                {% endif %}
                            {% endfor %}
                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '登録する'|trans }}</button>
                                    {% if is_granted('ROLE_USER') %}
                                    <a href=\"{{ url('shopping_shipping', { 'id': shippingId }) }}\" class=\"ec-blockBtn--cancel\">{{ '戻る'|trans }}</a>
                                    {% else %}
                                        <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ '戻る'|trans }}</a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Shopping/shipping_edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\shipping_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "set" => 15, "if" => 17, "for" => 125);
        static $filters = array("trans" => 18, "escape" => 30, "filter" => 125);
        static $functions = array("is_granted" => 17, "url" => 41, "form_widget" => 43, "form_label" => 47, "has_errors" => 50, "form_errors" => 53, "asset" => 92, "form_row" => 128);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'set', 'if', 'for'],
                ['trans', 'escape', 'filter'],
                ['is_granted', 'url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset', 'form_row']
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
