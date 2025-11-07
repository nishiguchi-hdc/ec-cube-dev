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

/* Contact/confirm.twig */
class __TwigTemplate_aee4fb4aa6bcec48d5e6284ddf6ad3a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/confirm.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Contact/confirm.twig", 11);
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
        echo "    <div class=\"ec-contactConfirmRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\" class=\"h-adr\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "_token", [], "any", false, false, true, 23), 23, $this->source), 'widget');
        echo "
                    <p>";
        // line 24
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内容によっては回答をさしあげるのにお時間をいただくこともございます。
また、休業日は翌営業日以降の対応となりますのでご了承ください。
"), "html", null, true));
        // line 26
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, true, 30), 30, $this->source), 'label', ["label_attr" => ["class" => "ec-label "], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, true, 33), "name01", [], "any", false, false, true, 33), "vars", [], "any", false, false, true, 33), "data", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
                                ";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, true, 34), "name02", [], "any", false, false, true, 34), "vars", [], "any", false, false, true, 34), "data", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, true, 35), "name01", [], "any", false, false, true, 35), 35, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, true, 36), "name02", [], "any", false, false, true, 36), 36, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "kana", [], "any", false, false, true, 41), 41, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "kana", [], "any", false, false, true, 44), "kana01", [], "any", false, false, true, 44), "vars", [], "any", false, false, true, 44), "data", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
                                ";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "kana", [], "any", false, false, true, 45), "kana02", [], "any", false, false, true, 45), "vars", [], "any", false, false, true, 45), "data", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "kana", [], "any", false, false, true, 46), "kana01", [], "any", false, false, true, 46), 46, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kana", [], "any", false, false, true, 47), "kana02", [], "any", false, false, true, 47), 47, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "address", [], "any", false, false, true, 52), 52, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 56
        echo "                                <span><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span></span>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "postal_code", [], "any", false, false, true, 56), "vars", [], "any", false, false, true, 56), "data", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "postal_code", [], "any", false, false, true, 57), 57, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 59
        echo "                                ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, true, 59), "pref", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "data", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, true, 59), "addr01", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "data", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, true, 59), "addr02", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "data", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, true, 60), "pref", [], "any", false, false, true, 60), 60, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, true, 61), "addr01", [], "any", false, false, true, 61), 61, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "address", [], "any", false, false, true, 62), "addr02", [], "any", false, false, true, 62), 62, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "phone_number", [], "any", false, false, true, 67), 67, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "phone_number", [], "any", false, false, true, 69), "vars", [], "any", false, false, true, 69), "data", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phone_number", [], "any", false, false, true, 70), 70, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, true, 75), 75, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, true, 78), "vars", [], "any", false, false, true, 78), "data", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, true, 79), 79, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "contents", [], "any", false, false, true, 84), 84, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お問い合わせ内容"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 87
        echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "contents", [], "any", false, false, true, 87), "vars", [], "any", false, false, true, 87), "data", [], "any", false, false, true, 87), 87, $this->source), "html", null, true));
        echo "
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "contents", [], "any", false, false, true, 88), 88, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        ";
        // line 92
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 92), "eccube_form_options", [], "any", false, false, true, 92), "auto_render", [], "any", false, false, true, 92); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 93
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 93), "eccube_form_options", [], "any", false, false, true, 93), "form_theme", [], "any", false, false, true, 93)) {
                // line 94
                echo "                                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 94), "eccube_form_options", [], "any", false, false, true, 94), "form_theme", [], "any", false, false, true, 94)], true);
                // line 95
                echo "                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 95, $this->source), 'row');
                echo "
                            ";
            } else {
                // line 97
                echo "                                <dl>
                                    <dt>
                                        ";
                // line 99
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 99), "label_attr", [], "any", false, true, true, 99), "class", [], "any", true, true, true, 99)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 99), "label_attr", [], "any", false, false, true, 99), "class", [], "any", false, false, true, 99)) : (""));
                // line 100
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 100, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 100, $this->source); })()), 100, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 100), "label", [], "any", false, false, true, 100), 100, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 103), "eccube_form_options", [], "any", false, false, true, 103), "style_class", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 103, $this->source))) ? (" error") : (""));
                echo "\">
                                            ";
                // line 104
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 104), "data", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "
                                            ";
                // line 105
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 105, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
            }
            // line 110
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                    </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\"
                                        class=\"ec-blockBtn--action\"
                                        name=\"mode\"
                                        value=\"complete\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送信する"), "html", null, true);
        echo "
                                </button>
                                <button type=\"submit\"
                                        class=\"ec-blockBtn--cancel\"
                                        name=\"mode\"
                                        value=\"back\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "
                                </button>
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
        return "Contact/confirm.twig";
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
        return array (  329 => 123,  321 => 118,  312 => 111,  306 => 110,  298 => 105,  294 => 104,  289 => 103,  282 => 100,  280 => 99,  276 => 97,  270 => 95,  267 => 94,  264 => 93,  259 => 92,  253 => 88,  249 => 87,  243 => 84,  235 => 79,  231 => 78,  225 => 75,  217 => 70,  213 => 69,  208 => 67,  200 => 62,  196 => 61,  192 => 60,  183 => 59,  179 => 57,  172 => 56,  166 => 52,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  140 => 41,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  114 => 30,  108 => 26,  104 => 24,  100 => 23,  96 => 22,  89 => 18,  85 => 16,  75 => 15,  64 => 11,  62 => 13,  37 => 11,);
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

{% block main %}
    <div class=\"ec-contactConfirmRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'お問い合わせ'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('contact') }}\" class=\"h-adr\">
                    {{ form_widget(form._token) }}
                    <p>{{ '内容によっては回答をさしあげるのにお時間をいただくこともございます。
また、休業日は翌営業日以降の対応となりますのでご了承ください。
'|trans|nl2br }}</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label '}}) }}
                            </dt>
                            <dd>
                                {{ form.name.name01.vars.data }}
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
                                {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {# 郵便番号 #}
                                <span><span>{{ '〒'|trans }}</span></span>{{ form.postal_code.vars.data }}
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
                                {{ form_widget(form.email, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.contents, 'お問い合わせ内容', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {{ form.contents.vars.data|nl2br }}
                                {{ form_widget(form.contents, { type : 'hidden' }) }}
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
                                            {{ f.vars.data }}
                                            {{ form_widget(f, { type: 'hidden'}) }}
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
                                        class=\"ec-blockBtn--action\"
                                        name=\"mode\"
                                        value=\"complete\">{{ '送信する'|trans }}
                                </button>
                                <button type=\"submit\"
                                        class=\"ec-blockBtn--cancel\"
                                        name=\"mode\"
                                        value=\"back\">{{ '戻る'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "Contact/confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Contact\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "for" => 92, "if" => 93, "set" => 99);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 26, "filter" => 92);
        static $functions = array("url" => 22, "form_widget" => 23, "form_label" => 30, "form_row" => 95, "has_errors" => 103);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'for', 'if', 'set'],
                ['escape', 'trans', 'nl2br', 'filter'],
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
