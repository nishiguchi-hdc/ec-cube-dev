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

/* sitemap.xml.twig */
class __TwigTemplate_871e20b6b6b47e24240a1298d1712d42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">
";
        // line 4
        if (array_key_exists("DefaultPages", $context)) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["DefaultPages"]) || array_key_exists("DefaultPages", $context) ? $context["DefaultPages"] : (function () { throw new RuntimeError('Variable "DefaultPages" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["DefaultPage"]) {
                // line 6
                echo "  ";
                if (((twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 6) != "product_detail") && (twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 6) != "product_list"))) {
                    // line 7
                    echo "  <url>
    <loc>";
                    // line 8
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 8), 8, $this->source));
                    echo "</loc>
    <lastmod>";
                    // line 9
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "update_date", [], "any", false, false, true, 9), 9, $this->source), "", "c"), "html", null, true);
                    echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['DefaultPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 15
        if (array_key_exists("UserPages", $context)) {
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["UserPages"]) || array_key_exists("UserPages", $context) ? $context["UserPages"] : (function () { throw new RuntimeError('Variable "UserPages" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["UserPage"]) {
                // line 17
                echo "  <url>
    <loc>";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_data", ["route" => twig_get_attribute($this->env, $this->source, $context["UserPage"], "url", [], "any", false, false, true, 18)]), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["UserPage"], "update_date", [], "any", false, false, true, 19), 19, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UserPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        if (array_key_exists("Categories", $context)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 27
                echo "  <url>
    <loc>";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "update_date", [], "any", false, false, true, 29), 29, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        if (array_key_exists("Products", $context)) {
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 37
                echo "  <url>
    <loc>";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 38)]), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, true, 39), 39, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Product"], "ProductImage", [], "any", false, false, true, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                    // line 42
                    echo "    <image:image>
      <image:loc>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 43, $this->source), "save_image")), "html", null, true);
                    echo "</image:loc>
    </image:image>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 49
        echo "</urlset>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sitemap.xml.twig";
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
        return array (  181 => 49,  173 => 46,  164 => 43,  161 => 42,  157 => 41,  152 => 39,  148 => 38,  145 => 37,  141 => 36,  139 => 35,  128 => 29,  122 => 28,  119 => 27,  115 => 26,  113 => 25,  102 => 19,  98 => 18,  95 => 17,  91 => 16,  89 => 15,  77 => 9,  73 => 8,  70 => 7,  67 => 6,  63 => 5,  61 => 4,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">
{# Pages #}
{% if DefaultPages is defined %}
{% for DefaultPage in DefaultPages %}
  {% if DefaultPage.url != 'product_detail' and DefaultPage.url != 'product_list' %}
  <url>
    <loc>{{url(DefaultPage.url)}}</loc>
    <lastmod>{{DefaultPage.update_date|date_format('','c')}}</lastmod>
    <changefreq>daily</changefreq>
  </url>
  {% endif %}
{% endfor %}
{% endif %}
{% if UserPages is defined %}
{% for UserPage in UserPages %}
  <url>
    <loc>{{url('user_data', {route: UserPage.url})}}</loc>
    <lastmod>{{UserPage.update_date|date_format('','c')}}</lastmod>
    <changefreq>daily</changefreq>
  </url>
{% endfor %}
{% endif %}
{# Categories #}
{% if Categories is defined %}
{% for Category in Categories %}
  <url>
    <loc>{{ url('product_list') }}?category_id={{Category.id}}</loc>
    <lastmod>{{Category.update_date|date_format('','c')}}</lastmod>
    <changefreq>daily</changefreq>
  </url>
{% endfor %}
{% endif %}
{# Products #}
{% if Products is defined %}
{% for Product in Products %}
  <url>
    <loc>{{ url('product_detail', {'id': Product.id}) }}</loc>
    <lastmod>{{Product.update_date|date_format('','c')}}</lastmod>
    <changefreq>daily</changefreq>
    {% for ProductImage in Product.ProductImage %}
    <image:image>
      <image:loc>{{ absolute_url(asset(ProductImage, 'save_image')) }}</image:loc>
    </image:image>
    {% endfor %}
  </url>
{% endfor %}
{% endif %}
</urlset>
", "sitemap.xml.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\sitemap.xml.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 5);
        static $filters = array("escape" => 9, "date_format" => 9);
        static $functions = array("url" => 8, "absolute_url" => 43, "asset" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date_format'],
                ['url', 'absolute_url', 'asset']
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
