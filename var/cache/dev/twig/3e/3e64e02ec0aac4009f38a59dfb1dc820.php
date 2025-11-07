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

/* Mypage/change.twig */
class __TwigTemplate_a42c774f1de387da6839133958d63562 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/change.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/change.twig"));

        // line 13
        $context["body_class"] = "mypage";
        // line 15
        $context["mypageno"] = "change";
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/change.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 24
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 29
        $this->loadTemplate("Mypage/navi.twig", "Mypage/change.twig", 29)->display($context);
        // line 30
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-editRole\">
                <div class=\"ec-off1Grid\">
                    <div class=\"ec-off1Grid__cell\">
                        <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_change");
        echo "\" novalidate class=\"h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "_token", [], "any", false, false, true, 37), 37, $this->source), 'widget');
        echo "
                            <div class=\"ec-borderedDefs\">
                                <dl>
                                    <dt>
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, true, 41), 41, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 44
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, true, 44), "name01", [], "any", false, false, true, 44), 44, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, true, 44), "name02", [], "any", false, false, true, 44), 44, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, true, 45), "name01", [], "any", false, false, true, 45), 45, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, true, 46), "name02", [], "any", false, false, true, 46), 46, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, true, 47), "name01", [], "any", false, false, true, 47), 47, $this->source), 'errors');
        echo "
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, true, 48), "name02", [], "any", false, false, true, 48), 48, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "kana", [], "any", false, false, true, 54), 54, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 57
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "kana", [], "any", false, false, true, 57), "kana01", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "kana", [], "any", false, false, true, 57), "kana02", [], "any", false, false, true, 57), 57, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "kana", [], "any", false, false, true, 58), "kana01", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "kana", [], "any", false, false, true, 59), "kana02", [], "any", false, false, true, 59), 59, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "kana", [], "any", false, false, true, 60), "kana01", [], "any", false, false, true, 60), 60, $this->source), 'errors');
        echo "
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "kana", [], "any", false, false, true, 61), "kana02", [], "any", false, false, true, 61), 61, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "company_name", [], "any", false, false, true, 67), 67, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 70
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "company_name", [], "any", false, false, true, 70), 70, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "company_name", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "company_name", [], "any", false, false, true, 72), 72, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, true, 78), 78, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-zipInput";
        // line 81
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "postal_code", [], "any", false, false, true, 81), 81, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "postal_code", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                                            <div class=\"ec-zipInputHelp\">
                                                <div class=\"ec-zipInputHelp__icon\">
                                                    <div class=\"ec-icon\"><img
                                                                src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                            </div>
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "postal_code", [], "any", false, false, true, 90), 90, $this->source), 'errors');
        echo "
                                        </div>

                                        <div class=\"ec-select";
        // line 93
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "address", [], "any", false, false, true, 93), "pref", [], "any", false, false, true, 93), 93, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "address", [], "any", false, false, true, 94), "pref", [], "any", false, false, true, 94), 94, $this->source), 'widget');
        echo "
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "address", [], "any", false, false, true, 95), "pref", [], "any", false, false, true, 95), 95, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 97
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "address", [], "any", false, false, true, 97), "addr01", [], "any", false, false, true, 97), 97, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "address", [], "any", false, false, true, 98), "addr01", [], "any", false, false, true, 98), 98, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, true, 99), "addr01", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 101
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "address", [], "any", false, false, true, 101), "addr02", [], "any", false, false, true, 101), 101, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "address", [], "any", false, false, true, 102), "addr02", [], "any", false, false, true, 102), 102, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, true, 103), "addr02", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "phone_number", [], "any", false, false, true, 109), 109, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-telInput";
        // line 112
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "phone_number", [], "any", false, false, true, 112), 112, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "phone_number", [], "any", false, false, true, 113), 113, $this->source), 'widget');
        echo "
                                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "phone_number", [], "any", false, false, true, 114), 114, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, true, 120), 120, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input";
        // line 123
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, true, 123), "first", [], "any", false, false, true, 123), 123, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, true, 124), "first", [], "any", false, false, true, 124), 124, $this->source), 'widget', ["attr" => ["placeholder" => "例：ec-cube@example.com"]]);
        echo "
                                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, true, 125), "first", [], "any", false, false, true, 125), 125, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 127
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, true, 127), "second", [], "any", false, false, true, 127), 127, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, true, 128), "second", [], "any", false, false, true, 128), 128, $this->source), 'widget', ["attr" => ["placeholder" => "確認のためもう一度入力してください"]]);
        echo "
                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "email", [], "any", false, false, true, 129), "second", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "plain_password", [], "any", false, false, true, 135), 135, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input";
        // line 138
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "plain_password", [], "any", false, false, true, 138), "first", [], "any", false, false, true, 138), 138, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "plain_password", [], "any", false, false, true, 139), "first", [], "any", false, false, true, 139), 139, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("半角英数記号%min%〜%max%文字", ["%min%" => twig_get_attribute($this->env, $this->source,         // line 140
(isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 140, $this->source); })()), "eccube_password_min_len", [], "any", false, false, true, 140), "%max%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 140, $this->source); })()), "eccube_password_max_len", [], "any", false, false, true, 140)])], "type" => "password"]);
        // line 142
        echo "
                                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "plain_password", [], "any", false, false, true, 143), "first", [], "any", false, false, true, 143), 143, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 145
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "plain_password", [], "any", false, false, true, 145), "second", [], "any", false, false, true, 145), 145, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "plain_password", [], "any", false, false, true, 146), "second", [], "any", false, false, true, 146), 146, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認のためもう一度入力してください")], "type" => "password"]);
        // line 149
        echo "
                                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "plain_password", [], "any", false, false, true, 150), "second", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "birth", [], "any", false, false, true, 156), 156, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-birth";
        // line 159
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "birth", [], "any", false, false, true, 159), 159, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "birth", [], "any", false, false, true, 160), "year", [], "any", false, false, true, 160), 160, $this->source), 'widget');
        echo "<span>/</span>
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "birth", [], "any", false, false, true, 161), "month", [], "any", false, false, true, 161), 161, $this->source), 'widget');
        echo "<span>/</span>
                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "birth", [], "any", false, false, true, 162), "day", [], "any", false, false, true, 162), 162, $this->source), 'widget');
        echo "
                                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "birth", [], "any", false, false, true, 163), 163, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "sex", [], "any", false, false, true, 169), 169, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-radio";
        // line 172
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "sex", [], "any", false, false, true, 172), 172, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "sex", [], "any", false, false, true, 173), 173, $this->source), 'widget');
        echo "
                                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "sex", [], "any", false, false, true, 174), 174, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "job", [], "any", false, false, true, 180), 180, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-select";
        // line 183
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "job", [], "any", false, false, true, 183), 183, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "job", [], "any", false, false, true, 184), 184, $this->source), 'widget');
        echo "
                                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "job", [], "any", false, false, true, 185), 185, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                ";
        // line 190
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 190), "eccube_form_options", [], "any", false, false, true, 190), "auto_render", [], "any", false, false, true, 190); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 191
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 191), "eccube_form_options", [], "any", false, false, true, 191), "form_theme", [], "any", false, false, true, 191)) {
                // line 192
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 192), "eccube_form_options", [], "any", false, false, true, 192), "form_theme", [], "any", false, false, true, 192)], true);
                // line 193
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 193, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 195
                echo "                                        <dl>
                                            <dt>
                                                ";
                // line 197
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 197), "label_attr", [], "any", false, true, true, 197), "class", [], "any", true, true, true, 197)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 197), "label_attr", [], "any", false, false, true, 197), "class", [], "any", false, false, true, 197)) : (""));
                // line 198
                echo "                                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 198, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 198, $this->source); })()), 198, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 198), "label", [], "any", false, false, true, 198), 198, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                            </dt>
                                            <dd>
                                                <div class=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 201), "eccube_form_options", [], "any", false, false, true, 201), "style_class", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 201, $this->source))) ? (" error") : (""));
                echo "\">
                                                    ";
                // line 202
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 202, $this->source), 'widget');
                echo "
                                                    ";
                // line 203
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 203, $this->source), 'errors');
                echo "
                                                </div>
                                            </dd>
                                        </dl>
                                    ";
            }
            // line 208
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                            </div>

                            <div class=\"ec-RegisterRole__actions\">
                                <div class=\"ec-off4Grid\">
                                    <div class=\"ec-off4Grid__cell\">
                                        <button type=\"submit\"
                                                class=\"ec-blockBtn--cancel\">";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
        return "Mypage/change.twig";
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
        return array (  541 => 215,  533 => 209,  527 => 208,  519 => 203,  515 => 202,  510 => 201,  503 => 198,  501 => 197,  497 => 195,  491 => 193,  488 => 192,  485 => 191,  480 => 190,  473 => 185,  469 => 184,  465 => 183,  459 => 180,  450 => 174,  446 => 173,  442 => 172,  436 => 169,  427 => 163,  423 => 162,  419 => 161,  415 => 160,  411 => 159,  405 => 156,  396 => 150,  393 => 149,  391 => 146,  387 => 145,  382 => 143,  379 => 142,  377 => 140,  376 => 139,  372 => 138,  366 => 135,  357 => 129,  353 => 128,  349 => 127,  344 => 125,  340 => 124,  336 => 123,  330 => 120,  321 => 114,  317 => 113,  313 => 112,  307 => 109,  298 => 103,  294 => 102,  290 => 101,  285 => 99,  281 => 98,  277 => 97,  272 => 95,  268 => 94,  264 => 93,  258 => 90,  253 => 88,  248 => 86,  241 => 82,  235 => 81,  229 => 78,  220 => 72,  216 => 71,  212 => 70,  206 => 67,  197 => 61,  193 => 60,  189 => 59,  185 => 58,  181 => 57,  175 => 54,  166 => 48,  162 => 47,  158 => 46,  154 => 45,  150 => 44,  144 => 41,  137 => 37,  132 => 35,  125 => 30,  123 => 29,  116 => 27,  111 => 24,  101 => 23,  90 => 20,  80 => 19,  69 => 11,  67 => 17,  65 => 15,  63 => 13,  38 => 11,);
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

{% set body_class = 'mypage' %}

{% set mypageno = 'change' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ '会員情報編集'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-editRole\">
                <div class=\"ec-off1Grid\">
                    <div class=\"ec-off1Grid__cell\">
                        <form method=\"post\" action=\"{{ url('mypage_change') }}\" novalidate class=\"h-adr\">
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
                                <dl>
                                    <dt>
                                        {{ form_label(form.email, 'メールアドレス', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input{{ has_errors(form.email.first) ? ' error' }}\">
                                            {{ form_widget(form.email.first, { 'attr': { 'placeholder': '例：ec-cube@example.com' }}) }}
                                            {{ form_errors(form.email.first) }}
                                        </div>
                                        <div class=\"ec-input{{ has_errors(form.email.second) ? ' error' }}\">
                                            {{ form_widget(form.email.second, { 'attr': { 'placeholder': '確認のためもう一度入力してください' }}) }}
                                            {{ form_errors(form.email.second) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.plain_password, 'パスワード', { 'label_attr': {'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input{{ has_errors(form.plain_password.first) ? ' error' }}\">
                                            {{ form_widget(form.plain_password.first, {
                                                'attr': { 'placeholder': '半角英数記号%min%〜%max%文字'|trans({ '%min%': eccube_config.eccube_password_min_len, '%max%': eccube_config.eccube_password_max_len }) },
                                                'type': 'password'
                                            }) }}
                                            {{ form_errors(form.plain_password.first) }}
                                        </div>
                                        <div class=\"ec-input{{ has_errors(form.plain_password.second) ? ' error' }}\">
                                            {{ form_widget(form.plain_password.second, {
                                                'attr': { 'placeholder': '確認のためもう一度入力してください'|trans },
                                                'type': 'password'
                                            }) }}
                                            {{ form_errors(form.plain_password.second) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.birth, '生年月日', { 'label_attr': {'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-birth{{ has_errors(form.birth) ? ' error'}}\">
                                            {{ form_widget(form.birth.year) }}<span>/</span>
                                            {{ form_widget(form.birth.month) }}<span>/</span>
                                            {{ form_widget(form.birth.day) }}
                                            {{ form_errors(form.birth) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.sex, '性別', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-radio{{ has_errors(form.sex) ? ' error' }}\">
                                            {{ form_widget(form.sex) }}
                                            {{ form_errors(form.sex) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.job, '職業', { 'label_attr': {'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-select{{ has_errors(form.job) ? ' error' }}\">
                                            {{ form_widget(form.job) }}
                                            {{ form_errors(form.job) }}
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
                                        <button type=\"submit\"
                                                class=\"ec-blockBtn--cancel\">{{ '登録する'|trans }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/change.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mypage\\change.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 17, "include" => 29, "for" => 190, "if" => 191);
        static $filters = array("escape" => 27, "trans" => 27, "filter" => 190);
        static $functions = array("url" => 35, "form_widget" => 37, "form_label" => 41, "has_errors" => 44, "form_errors" => 47, "asset" => 86, "form_row" => 193);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'include', 'for', 'if'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset', 'form_row']
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
