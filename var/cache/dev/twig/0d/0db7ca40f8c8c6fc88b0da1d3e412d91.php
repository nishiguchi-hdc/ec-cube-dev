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

/* ProductReview42/Resource/template/default/confirm.twig */
class __TwigTemplate_5a3984afe9f300609f9c938f79b7e994 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/default/confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/default/confirm.twig"));

        // line 13
        $context["body_class"] = "product_review_confirm";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "ProductReview42/Resource/template/default/confirm.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.title"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, true, 24)]), "html", null, true);
        echo "\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "_token", [], "any", false, false, true, 25), 25, $this->source), 'widget');
        echo "
                    <p class=\"ec-para-nomal\">";
        // line 26
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.confirm.description"), "html", null, true));
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        ";
        // line 29
        echo "                        <dl>
                            <dt>
                                <label class=\"ec-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.product_name"), "html", null, true);
        echo "</label>
                            </dt>
                            <dd>
                                <div class=\"ec-input\">
                                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 40
        echo "                        <dl>
                            <dt>
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "reviewer_name", [], "any", false, false, true, 42), 42, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 45
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "reviewer_name", [], "any", false, false, true, 45), 45, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "reviewer_name", [], "any", false, false, true, 46), "vars", [], "any", false, false, true, 46), "data", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "reviewer_name", [], "any", false, false, true, 47), 47, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 52
        echo "                        <dl>
                            <dt>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "reviewer_url", [], "any", false, false, true, 54), 54, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 57
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "reviewer_url", [], "any", false, false, true, 57), 57, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "reviewer_url", [], "any", false, false, true, 58), "vars", [], "any", false, false, true, 58), "data", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "reviewer_url", [], "any", false, false, true, 59), 59, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 64
        echo "                        <dl>
                            <dt>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "sex", [], "any", false, false, true, 66), 66, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.gender"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-radio";
        // line 69
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "sex", [], "any", false, false, true, 69), 69, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "sex", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "sex", [], "any", false, false, true, 71), 71, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 76
        echo "                        <dl>
                            <dt>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "recommend_level", [], "any", false, false, true, 78), 78, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-radio";
        // line 81
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "recommend_level", [], "any", false, false, true, 81), 81, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "recommend_level", [], "any", false, false, true, 82), "children", [], "any", false, false, true, 82), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 82), "checked", [], "any", false, false, true, 82); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 83
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 83), "label", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "recommend_level", [], "any", false, false, true, 85), 85, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 90
        echo "                        <dl>
                            <dt>
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "title", [], "any", false, false, true, 92), 92, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 95
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "title", [], "any", false, false, true, 95), 95, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "title", [], "any", false, false, true, 96), "vars", [], "any", false, false, true, 96), "data", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, true, 97), 97, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 102
        echo "                        <dl>
                            <dt>
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "comment", [], "any", false, false, true, 104), 104, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 107
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "comment", [], "any", false, false, true, 107), 107, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "comment", [], "any", false, false, true, 108), "vars", [], "any", false, false, true, 108), "data", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "comment", [], "any", false, false, true, 109), 109, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\"
                                        value=\"complete\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.comfirm.post"), "html", null, true);
        echo "</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\"
                                        value=\"back\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.back"), "html", null, true);
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
        return "ProductReview42/Resource/template/default/confirm.twig";
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
        return array (  299 => 120,  294 => 118,  282 => 109,  278 => 108,  274 => 107,  268 => 104,  264 => 102,  257 => 97,  253 => 96,  249 => 95,  243 => 92,  239 => 90,  231 => 85,  222 => 83,  218 => 82,  214 => 81,  208 => 78,  204 => 76,  197 => 71,  193 => 70,  189 => 69,  183 => 66,  179 => 64,  172 => 59,  168 => 58,  164 => 57,  158 => 54,  154 => 52,  147 => 47,  143 => 46,  139 => 45,  133 => 42,  129 => 40,  122 => 35,  115 => 31,  111 => 29,  106 => 26,  102 => 25,  98 => 24,  91 => 20,  87 => 18,  77 => 17,  66 => 11,  64 => 15,  62 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends 'default_frame.twig' %}

{% set body_class = 'product_review_confirm' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}
    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'product_review.front.review.title'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('product_review_index', { id: Product.id }) }}\">
                    {{ form_widget(form._token) }}
                    <p class=\"ec-para-nomal\">{{ 'product_review.front.review.confirm.description'|trans|nl2br }}</p>
                    <div class=\"ec-borderedDefs\">
                        {# 商品名 #}
                        <dl>
                            <dt>
                                <label class=\"ec-label\">{{ 'product_review.front.review.product_name'|trans }}</label>
                            </dt>
                            <dd>
                                <div class=\"ec-input\">
                                    {{ Product.name }}
                                </div>
                            </dd>
                        </dl>
                        {# 投稿者名 #}
                        <dl>
                            <dt>
                                {{ form_label(form.reviewer_name, '', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.reviewer_name) ? ' error' }}\">
                                    {{ form.reviewer_name.vars.data }}
                                    {{ form_widget(form.reviewer_name, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                        {# 投稿者URL #}
                        <dl>
                            <dt>
                                {{ form_label(form.reviewer_url, '', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.reviewer_url) ? ' error' }}\">
                                    {{ form.reviewer_url.vars.data }}
                                    {{ form_widget(form.reviewer_url, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                        {# 性別 #}
                        <dl>
                            <dt>
                                {{ form_label(form.sex, 'common.gender', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-radio{{ has_errors(form.sex) ? ' error' }}\">
                                    {{ form.sex.vars.data }}
                                    {{ form_widget(form.sex, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                        {# おすすめレベル #}
                        <dl>
                            <dt>
                                {{ form_label(form.recommend_level, '', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-radio{{ has_errors(form.recommend_level) ? ' error' }}\">
                                    {% for child in form.recommend_level.children|filter(child => child.vars.checked) %}
                                        {{ child.vars.label }}
                                    {% endfor %}
                                    {{ form_widget(form.recommend_level, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                        {# タイトル #}
                        <dl>
                            <dt>
                                {{ form_label(form.title, '', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.title) ? ' error' }}\">
                                    {{ form.title.vars.data }}
                                    {{ form_widget(form.title, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                        {# コメント #}
                        <dl>
                            <dt>
                                {{ form_label(form.comment, '', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.comment) ? ' error' }}\">
                                    {{ form.comment.vars.data }}
                                    {{ form_widget(form.comment, { type: 'hidden' }) }}
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\"
                                        value=\"complete\">{{ 'product_review.front.review.comfirm.post'|trans }}</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\"
                                        value=\"back\">{{ 'product_review.front.review.back'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

", "ProductReview42/Resource/template/default/confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\ProductReview42\\Resource\\template\\default\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15, "for" => 82);
        static $filters = array("escape" => 20, "trans" => 20, "nl2br" => 26, "filter" => 82);
        static $functions = array("url" => 24, "form_widget" => 25, "form_label" => 42, "has_errors" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for'],
                ['escape', 'trans', 'nl2br', 'filter'],
                ['url', 'form_widget', 'form_label', 'has_errors']
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
