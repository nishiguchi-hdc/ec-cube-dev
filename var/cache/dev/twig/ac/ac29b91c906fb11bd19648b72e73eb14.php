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

/* Block/auto_new_item.twig */
class __TwigTemplate_3400d2e4e62acd3a494b3443b69ea249 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/auto_new_item.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/auto_new_item.twig"));

        // line 11
        echo "
";
        // line 12
        if (array_key_exists("Products", $context)) {
            // line 13
            echo "<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
            echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
            echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 25
                echo "                <div class=\"ec-newItemRole__listItem __getAutoNewItemBlock\">
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 26)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, true, 27), 27, $this->source)), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">
                            ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 30) && (twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 30) != twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 30)))) {
                    // line 31
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 33
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
                    echo "
                            ";
                }
                // line 35
                echo "                        </p>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/auto_new_item.twig";
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
        return array (  133 => 39,  124 => 35,  118 => 33,  110 => 31,  108 => 30,  103 => 28,  97 => 27,  93 => 26,  90 => 25,  86 => 24,  78 => 21,  74 => 20,  69 => 18,  62 => 13,  60 => 12,  57 => 11,);
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

{% if Products is defined %}
<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">{{ 'NEW ITEM'|trans }}</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">{{ '新着商品'|trans }}</span>
                    <a class=\"ec-inlineBtn--top\" href=\"{{ url('product_list') }}\">{{ 'more'|trans }}</a>
                </div>
            </div>
            {% for Product in Products %}
                <div class=\"ec-newItemRole__listItem __getAutoNewItemBlock\">
                    <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                        <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\">
                        <p class=\"ec-newItemRole__listItemTitle\">{{ Product.name }}</p>
                        <p class=\"ec-newItemRole__listItemPrice\">
                            {% if Product.hasProductClass and Product.getPrice02Min != Product.getPrice02Max %}
                                {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                            {% else %}
                                {{ Product.getPrice02IncTaxMin|price }}
                            {% endif %}
                        </p>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endif %}
", "Block/auto_new_item.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Block\\auto_new_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 24);
        static $filters = array("escape" => 18, "trans" => 18, "no_image_product" => 27, "price" => 31);
        static $functions = array("url" => 21, "asset" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'asset']
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
