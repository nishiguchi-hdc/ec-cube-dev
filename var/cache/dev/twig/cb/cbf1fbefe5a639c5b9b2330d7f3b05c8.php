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

/* ProductReview42/Resource/template/default/review.twig */
class __TwigTemplate_41fbfae14ccd86f03c73fe5371fb4383 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/default/review.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/default/review.twig"));

        // line 11
        echo "
";
        // line 12
        $macros["stars"] = $this->macros["stars"] = $this;
        // line 13
        echo "
";
        // line 20
        echo "
<style type=\"text/css\">

    #product_review_area {
        border-top: 1px solid #E8E8E8;
        padding-bottom: 0;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading {
        cursor: pointer;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading.is_active i {
        transform: rotate(180deg);
    }

    #product_review_area .review_list {
        padding-left: 25px;
    }

    #product_review_area .review_list li {
        margin-bottom: 16px;
    }

    #product_review_area .review_list .review_date {
        font-weight: bold;
    }

    #product_review_area .recommend_average {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_level {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_name {
        margin-left: 16px;
    }

</style>

<script>
    \$(function() {
        \$('#product_review_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));

        \$('#product_review_area .ec-rectHeading').on('click', function() {
            \$content = \$('#reviewContent');
            if (\$content.css('display') == 'none') {
                \$(this).addClass('is_active');
                \$content.addClass('is_active');
                \$content.slideDown(300);
            } else {
                \$(this).removeClass('is_active');
                \$content.removeClass('is_active');
                \$content.slideUp(300);
            }
            return false;
        });
    });
</script>

<!--▼レビューエリア-->
<div id=\"product_review_area\">
    <div class=\"ec-role\">
        ";
        // line 90
        $context["positive_avg_star"] = (isset($context["ProductReviewAvg"]) || array_key_exists("ProductReviewAvg", $context) ? $context["ProductReviewAvg"] : (function () { throw new RuntimeError('Variable "ProductReviewAvg" does not exist.', 90, $this->source); })());
        // line 91
        echo "        ";
        $context["negative_avg_star"] = (5 - (isset($context["positive_avg_star"]) || array_key_exists("positive_avg_star", $context) ? $context["positive_avg_star"] : (function () { throw new RuntimeError('Variable "positive_avg_star" does not exist.', 91, $this->source); })()));
        // line 92
        echo "
        <div class=\"ec-rectHeading is_active\">
            <h4>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.title"), "html", null, true);
        echo "
                <!--平均の星の数-->
                <span class=\"recommend_average\">";
        // line 96
        echo twig_call_macro($macros["stars"], "macro_stars", [(isset($context["positive_avg_star"]) || array_key_exists("positive_avg_star", $context) ? $context["positive_avg_star"] : (function () { throw new RuntimeError('Variable "positive_avg_star" does not exist.', 96, $this->source); })()), (isset($context["negative_avg_star"]) || array_key_exists("negative_avg_star", $context) ? $context["negative_avg_star"] : (function () { throw new RuntimeError('Variable "negative_avg_star" does not exist.', 96, $this->source); })())], 96, $context, $this->getSourceContext());
        echo "</span>
                <!--レビュー数-->
                <span>(";
        // line 98
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["ProductReviewCount"]) || array_key_exists("ProductReviewCount", $context) ? $context["ProductReviewCount"] : (function () { throw new RuntimeError('Variable "ProductReviewCount" does not exist.', 98, $this->source); })()), 98, $this->source), "html", null, true);
        echo ")</span>
                <span class=\"chevron pull-right\">
                    <i class=\"fas fa-angle-up fa-lg\"></i>
                </span>
            </h4>
        </div>
        <div id=\"reviewContent\">
            ";
        // line 105
        if ((isset($context["ProductReviews"]) || array_key_exists("ProductReviews", $context) ? $context["ProductReviews"] : (function () { throw new RuntimeError('Variable "ProductReviews" does not exist.', 105, $this->source); })())) {
            // line 106
            echo "                <ul class=\"review_list\">
                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ProductReviews"]) || array_key_exists("ProductReviews", $context) ? $context["ProductReviews"] : (function () { throw new RuntimeError('Variable "ProductReviews" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductReview"]) {
                // line 108
                echo "                        <li>
                            <p class=\"review_date\">
                                <!--投稿日-->
                                ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "create_date", [], "any", false, false, true, 111), 111, $this->source)), "html", null, true);
                echo "

                                <!--投稿者-->
                                <span class=\"recommend_name\">
                                            ";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_url", [], "any", false, false, true, 115)) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_url", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                    echo "\" rel=\"ugc nofollow\"
                                                   target=\"_blank\">";
                    // line 117
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.name", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_name", [], "any", false, false, true, 117)]), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 119
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.name", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_name", [], "any", false, false, true, 119)]), "html", null, true);
                    echo "
                                            ";
                }
                // line 121
                echo "                                        </span>

                                <!--星の数-->
                                ";
                // line 124
                $context["positive_star"] = twig_get_attribute($this->env, $this->source, $context["ProductReview"], "recommend_level", [], "any", false, false, true, 124);
                // line 125
                echo "                                ";
                $context["negative_star"] = (5 - (isset($context["positive_star"]) || array_key_exists("positive_star", $context) ? $context["positive_star"] : (function () { throw new RuntimeError('Variable "positive_star" does not exist.', 125, $this->source); })()));
                // line 126
                echo "                                <span class=\"recommend_level\">
                                            ";
                // line 127
                echo twig_call_macro($macros["stars"], "macro_stars", [(isset($context["positive_star"]) || array_key_exists("positive_star", $context) ? $context["positive_star"] : (function () { throw new RuntimeError('Variable "positive_star" does not exist.', 127, $this->source); })()), (isset($context["negative_star"]) || array_key_exists("negative_star", $context) ? $context["negative_star"] : (function () { throw new RuntimeError('Variable "negative_star" does not exist.', 127, $this->source); })())], 127, $context, $this->getSourceContext());
                echo "
                                        </span>
                            </p>

                            <!--タイトル-->
                            <strong>";
                // line 132
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "title", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</strong>

                            <!--レビューコメント-->
                            <p>";
                // line 135
                echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "comment", [], "any", false, false, true, 135), 135, $this->source), "html", null, true));
                echo "</p>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductReview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                </ul>
            ";
        } else {
            // line 140
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.no_review"), "html", null, true);
            echo "</p>
            ";
        }
        // line 142
        echo "        </div>
        <div>
            <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, true, 144)]), "html", null, true);
        echo "\"
               class=\"ec-inlineBtn--action\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.post_review"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
<!-- ▲レビューエリア -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function macro_stars($__positive__ = null, $__negative__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "positive" => $__positive__,
            "negative" => $__negative__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "stars"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "stars"));

            // line 16
            echo "    ";
            $context["positive_stars"] = ["", "★", "★★", "★★★", "★★★★", "★★★★★"];
            // line 17
            echo "    ";
            $context["negative_stars"] = ["", "☆", "☆☆", "☆☆☆", "☆☆☆☆", "☆☆☆☆☆"];
            // line 18
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["positive_stars"]) || array_key_exists("positive_stars", $context) ? $context["positive_stars"] : (function () { throw new RuntimeError('Variable "positive_stars" does not exist.', 18, $this->source); })()), (isset($context["positive"]) || array_key_exists("positive", $context) ? $context["positive"] : (function () { throw new RuntimeError('Variable "positive" does not exist.', 18, $this->source); })()), [], "array", false, false, true, 18), 18, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["negative_stars"]) || array_key_exists("negative_stars", $context) ? $context["negative_stars"] : (function () { throw new RuntimeError('Variable "negative_stars" does not exist.', 18, $this->source); })()), (isset($context["negative"]) || array_key_exists("negative", $context) ? $context["negative"] : (function () { throw new RuntimeError('Variable "negative" does not exist.', 18, $this->source); })()), [], "array", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/Resource/template/default/review.twig";
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
        return array (  301 => 18,  298 => 17,  295 => 16,  275 => 15,  259 => 145,  255 => 144,  251 => 142,  245 => 140,  241 => 138,  232 => 135,  226 => 132,  218 => 127,  215 => 126,  212 => 125,  210 => 124,  205 => 121,  199 => 119,  194 => 117,  189 => 116,  187 => 115,  180 => 111,  175 => 108,  171 => 107,  168 => 106,  166 => 105,  156 => 98,  151 => 96,  146 => 94,  142 => 92,  139 => 91,  137 => 90,  65 => 20,  62 => 13,  60 => 12,  57 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/*
 * This file is part of the ProductReview plugin
 *
 * Copyright (C) 2016 LOCKON CO.,LTD. All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
#}

{% import _self as stars %}

{# 星テキスト生成用マクロ #}
{% macro stars(positive, negative) %}
    {% set positive_stars = [\"\", \"★\", \"★★\", \"★★★\", \"★★★★\", \"★★★★★\"] %}
    {% set negative_stars = [\"\", \"☆\", \"☆☆\", \"☆☆☆\", \"☆☆☆☆\", \"☆☆☆☆☆\"] %}
    {{ positive_stars[positive] }}{{ negative_stars[negative] }}
{% endmacro %}

<style type=\"text/css\">

    #product_review_area {
        border-top: 1px solid #E8E8E8;
        padding-bottom: 0;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading {
        cursor: pointer;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading.is_active i {
        transform: rotate(180deg);
    }

    #product_review_area .review_list {
        padding-left: 25px;
    }

    #product_review_area .review_list li {
        margin-bottom: 16px;
    }

    #product_review_area .review_list .review_date {
        font-weight: bold;
    }

    #product_review_area .recommend_average {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_level {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_name {
        margin-left: 16px;
    }

</style>

<script>
    \$(function() {
        \$('#product_review_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));

        \$('#product_review_area .ec-rectHeading').on('click', function() {
            \$content = \$('#reviewContent');
            if (\$content.css('display') == 'none') {
                \$(this).addClass('is_active');
                \$content.addClass('is_active');
                \$content.slideDown(300);
            } else {
                \$(this).removeClass('is_active');
                \$content.removeClass('is_active');
                \$content.slideUp(300);
            }
            return false;
        });
    });
</script>

<!--▼レビューエリア-->
<div id=\"product_review_area\">
    <div class=\"ec-role\">
        {% set positive_avg_star = ProductReviewAvg %}
        {% set negative_avg_star = 5 - positive_avg_star %}

        <div class=\"ec-rectHeading is_active\">
            <h4>{{ 'product_review.front.product_detail.title'|trans }}
                <!--平均の星の数-->
                <span class=\"recommend_average\">{{ stars.stars(positive_avg_star, negative_avg_star) }}</span>
                <!--レビュー数-->
                <span>({{ ProductReviewCount }})</span>
                <span class=\"chevron pull-right\">
                    <i class=\"fas fa-angle-up fa-lg\"></i>
                </span>
            </h4>
        </div>
        <div id=\"reviewContent\">
            {% if ProductReviews %}
                <ul class=\"review_list\">
                    {% for ProductReview in ProductReviews %}
                        <li>
                            <p class=\"review_date\">
                                <!--投稿日-->
                                {{ ProductReview.create_date|date_day }}

                                <!--投稿者-->
                                <span class=\"recommend_name\">
                                            {% if ProductReview.reviewer_url %}
                                                <a href=\"{{ ProductReview.reviewer_url }}\" rel=\"ugc nofollow\"
                                                   target=\"_blank\">{{ 'product_review.front.product_detail.name'|trans({ '%name%': ProductReview.reviewer_name }) }}</a>
                                            {% else %}
                                                {{ 'product_review.front.product_detail.name'|trans({ '%name%': ProductReview.reviewer_name }) }}
                                            {% endif %}
                                        </span>

                                <!--星の数-->
                                {% set positive_star = ProductReview.recommend_level %}
                                {% set negative_star = 5 - positive_star %}
                                <span class=\"recommend_level\">
                                            {{ stars.stars(positive_star, negative_star) }}
                                        </span>
                            </p>

                            <!--タイトル-->
                            <strong>{{ ProductReview.title }}</strong>

                            <!--レビューコメント-->
                            <p>{{ ProductReview.comment|nl2br }}</p>
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p>{{ 'product_review.front.product_detail.no_review'|trans }}</p>
            {% endif %}
        </div>
        <div>
            <a href=\"{{ url('product_review_index', { id: Product.id }) }}\"
               class=\"ec-inlineBtn--action\">{{ 'product_review.front.product_detail.post_review'|trans }}</a>
        </div>
    </div>
</div>
<!-- ▲レビューエリア -->
", "ProductReview42/Resource/template/default/review.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\ProductReview42\\Resource\\template\\default\\review.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 12, "set" => 90, "if" => 105, "for" => 107, "macro" => 15);
        static $filters = array("escape" => 94, "trans" => 94, "date_day" => 111, "nl2br" => 135);
        static $functions = array("url" => 144);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'for', 'macro'],
                ['escape', 'trans', 'date_day', 'nl2br'],
                ['url']
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
