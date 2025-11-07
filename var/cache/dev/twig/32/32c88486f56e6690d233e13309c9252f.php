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

/* Shopping/nonmember.twig */
class __TwigTemplate_d3db1f12e45a9db06cdcc17316ff8e92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/nonmember.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/nonmember.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/nonmember.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 18
        echo "<script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "
<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報の入力"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 30
        $context["step"] = 1;
        // line 31
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 32, $this->source); })()), 32, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 32, $this->source); })()) + 1);
        // line 33
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 38
            echo "                    <li class=\"ec-progress__item is-complete\">
                        <div class=\"ec-progress__number\">";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 39, $this->source); })()), 39, $this->source), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 39, $this->source); })()) + 1);
            // line 40
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 45
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 46, $this->source); })()), 46, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 46, $this->source); })()) + 1);
        // line 47
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 52, $this->source); })()) + 1);
        // line 53
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 58, $this->source); })()), 58, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 58, $this->source); })()) + 1);
        // line 59
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_nonmember");
        echo "\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "_token", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, true, 75), 75, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 78
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, true, 78), "name01", [], "any", false, false, true, 78), 78, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, true, 78), "name02", [], "any", false, false, true, 78), 78, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, true, 79), "name01", [], "any", false, false, true, 79), 79, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, true, 80), "name02", [], "any", false, false, true, 80), 80, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, true, 81), "name01", [], "any", false, false, true, 81), 81, $this->source), 'errors');
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, true, 82), "name02", [], "any", false, false, true, 82), 82, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "kana", [], "any", false, false, true, 88), 88, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 91
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "kana", [], "any", false, false, true, 91), "kana01", [], "any", false, false, true, 91), 91, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "kana", [], "any", false, false, true, 91), "kana02", [], "any", false, false, true, 91), 91, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "kana", [], "any", false, false, true, 92), "kana01", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "kana", [], "any", false, false, true, 93), "kana02", [], "any", false, false, true, 93), 93, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "kana", [], "any", false, false, true, 94), "kana01", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "kana", [], "any", false, false, true, 95), "kana02", [], "any", false, false, true, 95), 95, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "company_name", [], "any", false, false, true, 101), 101, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 104
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "company_name", [], "any", false, false, true, 104), 104, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "company_name", [], "any", false, false, true, 105), 105, $this->source), 'widget');
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "company_name", [], "any", false, false, true, 106), 106, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "address", [], "any", false, false, true, 112), 112, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-zipInput";
        // line 115
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "postal_code", [], "any", false, false, true, 115), 115, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "postal_code", [], "any", false, false, true, 116), 116, $this->source), 'widget');
        echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                            </div>
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "postal_code", [], "any", false, false, true, 124), 124, $this->source), 'errors');
        echo "
                        </div>

                        <div class=\"ec-select";
        // line 127
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "address", [], "any", false, false, true, 127), "pref", [], "any", false, false, true, 127), 127, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "address", [], "any", false, false, true, 128), "pref", [], "any", false, false, true, 128), 128, $this->source), 'widget');
        echo "
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "address", [], "any", false, false, true, 129), "pref", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 131
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "address", [], "any", false, false, true, 131), "addr01", [], "any", false, false, true, 131), 131, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "address", [], "any", false, false, true, 132), "addr01", [], "any", false, false, true, 132), 132, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "address", [], "any", false, false, true, 133), "addr01", [], "any", false, false, true, 133), 133, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 135
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "address", [], "any", false, false, true, 135), "addr02", [], "any", false, false, true, 135), 135, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "address", [], "any", false, false, true, 136), "addr02", [], "any", false, false, true, 136), 136, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "address", [], "any", false, false, true, 137), "addr02", [], "any", false, false, true, 137), 137, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "phone_number", [], "any", false, false, true, 143), 143, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-telInput";
        // line 146
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "phone_number", [], "any", false, false, true, 146), 146, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "phone_number", [], "any", false, false, true, 147), 147, $this->source), 'widget');
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "phone_number", [], "any", false, false, true, 148), 148, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "email", [], "any", false, false, true, 154), 154, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-input";
        // line 157
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "email", [], "any", false, false, true, 157), "first", [], "any", false, false, true, 157), 157, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "email", [], "any", false, false, true, 158), "first", [], "any", false, false, true, 158), 158, $this->source), 'widget', ["attr" => ["placeholder" => "例：ec-cube@example.com"]]);
        echo "
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "email", [], "any", false, false, true, 159), "first", [], "any", false, false, true, 159), 159, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 161
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "email", [], "any", false, false, true, 161), "second", [], "any", false, false, true, 161), 161, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "email", [], "any", false, false, true, 162), "second", [], "any", false, false, true, 162), 162, $this->source), 'widget', ["attr" => ["placeholder" => "確認のためもう一度入力してください"]]);
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "email", [], "any", false, false, true, 163), "second", [], "any", false, false, true, 163), 163, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/nonmember.twig";
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
        return array (  444 => 172,  440 => 171,  429 => 163,  425 => 162,  421 => 161,  416 => 159,  412 => 158,  408 => 157,  402 => 154,  393 => 148,  389 => 147,  385 => 146,  379 => 143,  370 => 137,  366 => 136,  362 => 135,  357 => 133,  353 => 132,  349 => 131,  344 => 129,  340 => 128,  336 => 127,  330 => 124,  325 => 122,  320 => 120,  313 => 116,  307 => 115,  301 => 112,  292 => 106,  288 => 105,  284 => 104,  278 => 101,  269 => 95,  265 => 94,  261 => 93,  257 => 92,  253 => 91,  247 => 88,  238 => 82,  234 => 81,  230 => 80,  226 => 79,  222 => 78,  216 => 75,  209 => 71,  204 => 69,  192 => 60,  189 => 59,  186 => 58,  179 => 54,  176 => 53,  173 => 52,  166 => 48,  163 => 47,  160 => 46,  157 => 45,  150 => 41,  147 => 40,  144 => 39,  141 => 38,  139 => 37,  133 => 34,  130 => 33,  127 => 32,  124 => 31,  122 => 30,  114 => 25,  109 => 22,  99 => 21,  88 => 18,  78 => 17,  67 => 11,  65 => 15,  63 => 13,  38 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
<script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'お客様情報の入力'|trans }}</h1>
    </div>
    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                {% set step = 1 %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                    </div>
                </li>
                {% if is_granted('ROLE_USER') == false %}
                    <li class=\"ec-progress__item is-complete\">
                        <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                        </div>
                        <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                        </div>
                    </li>
                {% endif %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ '完了'|trans }}
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"{{ url('shopping_nonmember') }}\" class=\"h-adr\">
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
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '次へ'|trans }}</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"{{ url('cart') }}\">{{ '戻る'|trans }}</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
{% endblock %}
", "Shopping/nonmember.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\nonmember.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15, "if" => 37);
        static $filters = array("escape" => 25, "trans" => 25);
        static $functions = array("is_granted" => 37, "url" => 69, "form_widget" => 71, "form_label" => 75, "has_errors" => 78, "form_errors" => 81, "asset" => 120);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans'],
                ['is_granted', 'url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset']
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
