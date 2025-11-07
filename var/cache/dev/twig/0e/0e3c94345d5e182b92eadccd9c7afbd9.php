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

/* Entry/confirm.twig */
class __TwigTemplate_36073d1083acf8068c73d7cb96241916 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry/confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry/confirm.twig"));

        // line 13
        $context["body_class"] = "registration_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(確認)"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
        echo "\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "_token", [], "any", false, false, true, 25), 25, $this->source), 'widget');
        echo "
                    <p>";
        // line 26
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("下記の内容で登録してもよろしいでしょうか？
よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。
"), "html", null, true));
        // line 28
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, true, 32), 32, $this->source), 'label', ["label_attr" => ["class" => "ec-label "], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, true, 35), "name01", [], "any", false, false, true, 35), "vars", [], "any", false, false, true, 35), "data", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo " ";
        // line 36
        echo "                                ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, true, 36), "name02", [], "any", false, false, true, 36), "vars", [], "any", false, false, true, 36), "data", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, true, 37), "name01", [], "any", false, false, true, 37), 37, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, true, 38), "name02", [], "any", false, false, true, 38), 38, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "kana", [], "any", false, false, true, 43), 43, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "kana", [], "any", false, false, true, 46), "kana01", [], "any", false, false, true, 46), "vars", [], "any", false, false, true, 46), "data", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
                                ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kana", [], "any", false, false, true, 47), "kana02", [], "any", false, false, true, 47), "vars", [], "any", false, false, true, 47), "data", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "kana", [], "any", false, false, true, 48), "kana01", [], "any", false, false, true, 48), 48, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "kana", [], "any", false, false, true, 49), "kana02", [], "any", false, false, true, 49), 49, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "company_name", [], "any", false, false, true, 54), 54, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "company_name", [], "any", false, false, true, 57), "vars", [], "any", false, false, true, 57), "data", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "company_name", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "address", [], "any", false, false, true, 63), 63, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 67
        echo "                                <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "postal_code", [], "any", false, false, true, 67), "vars", [], "any", false, false, true, 67), "data", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "postal_code", [], "any", false, false, true, 68), 68, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 70
        echo "                                ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "address", [], "any", false, false, true, 70), "pref", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "address", [], "any", false, false, true, 70), "addr01", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "address", [], "any", false, false, true, 70), "addr02", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "address", [], "any", false, false, true, 71), "pref", [], "any", false, false, true, 71), 71, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "address", [], "any", false, false, true, 72), "addr01", [], "any", false, false, true, 72), 72, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "address", [], "any", false, false, true, 73), "addr02", [], "any", false, false, true, 73), 73, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "phone_number", [], "any", false, false, true, 78), 78, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "phone_number", [], "any", false, false, true, 80), "vars", [], "any", false, false, true, 80), "data", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "phone_number", [], "any", false, false, true, 81), 81, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, true, 86), 86, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, true, 89), "vars", [], "any", false, false, true, 89), "data", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, true, 90), "first", [], "any", false, false, true, 90), 90, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, true, 91), "second", [], "any", false, false, true, 91), 91, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "plain_password", [], "any", false, false, true, 96), 96, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                            </dt>
                            <dd>
                                ********
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "plain_password", [], "any", false, false, true, 100), "first", [], "any", false, false, true, 100), 100, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "plain_password", [], "any", false, false, true, 101), "second", [], "any", false, false, true, 101), 101, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "birth", [], "any", false, false, true, 106), 106, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 109
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "birth", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "data", [], "any", false, false, true, 109)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "birth", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "data", [], "any", false, false, true, 109)), "html", null, true))) : (print ("")));
        echo "
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "birth", [], "any", false, false, true, 110), "year", [], "any", false, false, true, 110), 110, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "birth", [], "any", false, false, true, 111), "month", [], "any", false, false, true, 111), 111, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "birth", [], "any", false, false, true, 112), "day", [], "any", false, false, true, 112), 112, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "sex", [], "any", false, false, true, 117), 117, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "sex", [], "any", false, false, true, 120), "vars", [], "any", false, false, true, 120), "data", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "sex", [], "any", false, false, true, 121), 121, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "job", [], "any", false, false, true, 126), 126, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                            </dt>
                            <dd>";
        // line 128
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "job", [], "any", false, false, true, 128), "vars", [], "any", false, false, true, 128), "data", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "job", [], "any", false, false, true, 129), 129, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>

                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "user_policy_check", [], "any", false, false, true, 133), 133, $this->source), 'widget', ["type" => "hidden"]);
        echo "

                        ";
        // line 136
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 136), "eccube_form_options", [], "any", false, false, true, 136), "auto_render", [], "any", false, false, true, 136); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 137
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 137), "eccube_form_options", [], "any", false, false, true, 137), "form_theme", [], "any", false, false, true, 137)) {
                // line 138
                echo "                                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 138), "eccube_form_options", [], "any", false, false, true, 138), "form_theme", [], "any", false, false, true, 138)], true);
                // line 139
                echo "                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 139, $this->source), 'row');
                echo "
                            ";
            } else {
                // line 141
                echo "                                <dl>
                                    <dt>
                                        ";
                // line 143
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 143), "label_attr", [], "any", false, true, true, 143), "class", [], "any", true, true, true, 143)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 143), "label_attr", [], "any", false, false, true, 143), "class", [], "any", false, false, true, 143)) : (""));
                // line 144
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 144, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 144, $this->source); })()), 144, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 144), "label", [], "any", false, false, true, 144), 144, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 147), "eccube_form_options", [], "any", false, false, true, 147), "style_class", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 147, $this->source))) ? (" error") : (""));
                echo "\">
                                            ";
                // line 148
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 148), "data", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "
                                            ";
                // line 149
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 149, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
            }
            // line 154
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"complete\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録をする"), "html", null, true);
        echo "</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\" value=\"back\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</button>
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
        return "Entry/confirm.twig";
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
        return array (  414 => 160,  410 => 159,  404 => 155,  398 => 154,  390 => 149,  386 => 148,  381 => 147,  374 => 144,  372 => 143,  368 => 141,  362 => 139,  359 => 138,  356 => 137,  351 => 136,  346 => 133,  339 => 129,  335 => 128,  330 => 126,  322 => 121,  318 => 120,  312 => 117,  304 => 112,  300 => 111,  296 => 110,  292 => 109,  286 => 106,  278 => 101,  274 => 100,  267 => 96,  259 => 91,  255 => 90,  251 => 89,  245 => 86,  237 => 81,  233 => 80,  228 => 78,  220 => 73,  216 => 72,  212 => 71,  203 => 70,  199 => 68,  192 => 67,  186 => 63,  178 => 58,  174 => 57,  168 => 54,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  142 => 43,  134 => 38,  130 => 37,  125 => 36,  122 => 35,  116 => 32,  110 => 28,  106 => 26,  102 => 25,  98 => 24,  91 => 20,  87 => 18,  77 => 17,  66 => 11,  64 => 15,  62 => 13,  37 => 11,);
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

{% set body_class = 'registration_page' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}
    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ '新規会員登録(確認)'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('entry') }}\">
                    {{ form_widget(form._token) }}
                    <p>{{ '下記の内容で登録してもよろしいでしょうか？
よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。
'|trans|nl2br }}</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label '}}) }}
                            </dt>
                            <dd>
                                {{ form.name.name01.vars.data }} {# form.vars.value = form.vars.data = Customer #}
                                {{ form.name.name02.vars.data }}
                                {{ form_widget(form.name.name01, { type : 'hidden' }) }}
                                {{ form_widget(form.name.name02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {{ form.kana.kana01.vars.data }}
                                {{ form.kana.kana02.vars.data }}
                                {{ form_widget(form.kana.kana01, { type : 'hidden' }) }}
                                {{ form_widget(form.kana.kana02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.company_name.vars.data }}
                                {{ form_widget(form.company_name, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {# 郵便番号 #}
                                <span>{{ '〒'|trans }}</span>{{ form.postal_code.vars.data }}
                                {{ form_widget(form.postal_code, { type : 'hidden' }) }}
                                {# 都道府県・住所 #}
                                {{ form.address.pref.vars.data }} {{ form.address.addr01.vars.data }} {{ form.address.addr02.vars.data }}
                                {{ form_widget(form.address.pref, { type : 'hidden' }) }}
                                {{ form_widget(form.address.addr01, { type : 'hidden' }) }}
                                {{ form_widget(form.address.addr02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>{{ form.phone_number.vars.data }}
                                {{ form_widget(form.phone_number, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.email, 'メールアドレス', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.email.vars.data }}
                                {{ form_widget(form.email.first, { type : 'hidden' }) }}
                                {{ form_widget(form.email.second, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.plain_password, 'パスワード', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                ********
                                {{ form_widget(form.plain_password.first, { type : 'hidden' }) }}
                                {{ form_widget(form.plain_password.second, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.birth, '生年月日', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {{ form.birth.vars.data ? form.birth.vars.data|date_day() }}
                                {{ form_widget(form.birth.year, { type : 'hidden' }) }}
                                {{ form_widget(form.birth.month, { type : 'hidden' }) }}
                                {{ form_widget(form.birth.day, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.sex, '性別', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.sex.vars.data }}
                                {{ form_widget(form.sex, { type: 'hidden'}) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.job, '職業', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>{{ form.job.vars.data }}
                                {{ form_widget(form.job, { type: 'hidden'}) }}
                            </dd>
                        </dl>

                        {{ form_widget(form.user_policy_check, { type: 'hidden'}) }}

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
                                            {{ f.vars.data }}
                                            {{ form_widget(f, { type: 'hidden'}) }}
                                        </div>
                                    </dd>
                                </dl>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"complete\">{{ '会員登録をする'|trans }}</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\" value=\"back\">{{ '戻る'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "Entry/confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Entry\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15, "for" => 136, "if" => 137);
        static $filters = array("escape" => 20, "trans" => 20, "nl2br" => 28, "date_day" => 109, "filter" => 136);
        static $functions = array("url" => 24, "form_widget" => 25, "form_label" => 32, "form_row" => 139, "has_errors" => 147);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'nl2br', 'date_day', 'filter'],
                ['url', 'form_widget', 'form_label', 'form_row', 'has_errors']
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
