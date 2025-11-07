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

/* Coupon42/Resource/template/admin/index.twig */
class __TwigTemplate_dc1029c9eef8066b19fa68904d864bb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/index.twig"));

        // line 13
        $context["menus"] = ["order", "plugin_coupon"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Coupon42/Resource/template/admin/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.subtitle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.number", ["%number%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Coupons"]) || array_key_exists("Coupons", $context) ? $context["Coupons"] : (function () { throw new RuntimeError('Variable "Coupons" does not exist.', 24, $this->source); })()), 24, $this->source))]);
        echo "</span></div>
                    <div class=\"card-body p-0\">
                            <table class=\"table tabel-sm\">
                                <thead>
                                <tr>
                                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col01"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col02"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col03"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col04"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col05"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col06"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col07"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col08"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col09"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col10"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col11"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.col12"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coupons"]) || array_key_exists("Coupons", $context) ? $context["Coupons"] : (function () { throw new RuntimeError('Variable "Coupons" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Coupon"]) {
            // line 45
            echo "                                <tr class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "enable_flag", [], "any", false, false, true, 45) == 0)) {
                echo "active";
            }
            echo "\">
                                    <td class=\"coupon_id\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</td>
                                    <td class=\"coupon_cd\">";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_cd", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</td>
                                    <td class=\"coupon_name\">";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</td>
                                    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_type", [], "any", false, false, true, 49) == 1)) {
                // line 50
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.product"), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["Coupon"], "coupon_type", [], "any", false, false, true, 51) == 2)) {
                // line 52
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.category"), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
$context["Coupon"], "coupon_type", [], "any", false, false, true, 53) == 3)) {
                // line 54
                echo "                                        <td class=\"coupon_type\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_type.all"), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 56
                echo "                                        <td class=\"coupon_type\"></td>
                                    ";
            }
            // line 58
            echo "
                                    ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_member", [], "any", false, false, true, 59) == 1)) {
                // line 60
                echo "                                        <td class=\"coupon_member\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_member.yes"), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 62
                echo "                                        <td class=\"coupon_member\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.coupon_member.no"), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 64
            echo "
                                    ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_type", [], "any", false, false, true, 65) == 1)) {
                // line 66
                echo "                                        <td class=\"coupon_discount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_price", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                echo "</td>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 67
$context["Coupon"], "discount_type", [], "any", false, false, true, 67) == 2)) {
                // line 68
                echo "                                        <td class=\"coupon_discount\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "discount_rate", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo " %</td>
                                    ";
            } else {
                // line 70
                echo "                                        <td class=\"coupon_discount\"></td>
                                    ";
            }
            // line 72
            echo "
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_use_time", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_release", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "coupon_lower_limit", [], "any", false, false, true, 74), 74, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "available_from_date", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "available_to_date", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
            echo "</td>

                                    <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "</a></td>
                                    <td>
                                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 79)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-confirm=\"false\" data-method=\"put\">
                                        ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["Coupon"], "enable_flag", [], "any", false, false, true, 80) == 1)) {
                // line 81
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 83
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                echo "
                                        ";
            }
            // line 85
            echo "                                        </a>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
            // line 88
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "\" data-bs-tooltip=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                        </a>

                                        <div class=\"modal fade\" id=\"confirmModal-";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.delete__confirm_title"), "html", null, true);
            echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body text-start\">
                                                        <p class=\"text-start\">
                                                            ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.delete__confirm_message"), "html", null, true);
            echo "</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
            echo "
                                                        </button>
                                                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Coupon"], "id", [], "any", false, false, true, 110)]), "html", null, true);
            echo "\" class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\">
                                                            ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_new");
        echo "\" class=\"btn btn-ec-regular ps-4 pe-4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.index.create_button"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/index.twig";
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
        return array (  406 => 130,  395 => 121,  379 => 111,  373 => 110,  368 => 108,  361 => 104,  353 => 99,  345 => 94,  340 => 92,  331 => 88,  326 => 85,  320 => 83,  314 => 81,  312 => 80,  306 => 79,  299 => 77,  292 => 75,  288 => 74,  282 => 73,  279 => 72,  275 => 70,  269 => 68,  267 => 67,  262 => 66,  260 => 65,  257 => 64,  251 => 62,  245 => 60,  243 => 59,  240 => 58,  236 => 56,  230 => 54,  228 => 53,  223 => 52,  221 => 51,  216 => 50,  214 => 49,  210 => 48,  206 => 47,  202 => 46,  195 => 45,  191 => 44,  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  132 => 24,  125 => 19,  115 => 18,  96 => 16,  77 => 15,  66 => 11,  64 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of the Coupon plugin

 Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 http://www.ec-cube.co.jp/

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['order', 'plugin_coupon'] %}

{% block title %}{{ 'plugin_coupon.admin.index.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'plugin_coupon.admin.index.subtitle'|trans }}{% endblock %}

{% block main %}
<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">{{ 'plugin_coupon.admin.index.number'|trans({'%number%': Coupons|length})|raw }}</span></div>
                    <div class=\"card-body p-0\">
                            <table class=\"table tabel-sm\">
                                <thead>
                                <tr>
                                    <th>{{ 'plugin_coupon.admin.index.col01'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col02'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col03'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col04'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col05'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col06'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col07'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col08'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col09'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col10'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col11'|trans }}</th>
                                    <th>{{ 'plugin_coupon.admin.index.col12'|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for Coupon in Coupons %}
                                <tr class=\"{% if Coupon.enable_flag == 0 %}active{% endif %}\">
                                    <td class=\"coupon_id\">{{ Coupon.id }}</td>
                                    <td class=\"coupon_cd\">{{ Coupon.coupon_cd }}</td>
                                    <td class=\"coupon_name\">{{ Coupon.coupon_name }}</td>
                                    {% if Coupon.coupon_type == 1 %}
                                        <td class=\"coupon_type\">{{ 'plugin_coupon.admin.coupon_type.product'|trans }}</td>
                                    {% elseif Coupon.coupon_type == 2 %}
                                        <td class=\"coupon_type\">{{ 'plugin_coupon.admin.coupon_type.category'|trans }}</td>
                                    {% elseif Coupon.coupon_type == 3 %}
                                        <td class=\"coupon_type\">{{ 'plugin_coupon.admin.coupon_type.all'|trans }}</td>
                                    {% else %}
                                        <td class=\"coupon_type\"></td>
                                    {% endif %}

                                    {% if Coupon.coupon_member == 1 %}
                                        <td class=\"coupon_member\">{{ 'plugin_coupon.admin.coupon_member.yes'|trans }}</td>
                                    {% else %}
                                        <td class=\"coupon_member\">{{ 'plugin_coupon.admin.coupon_member.no'|trans }}</td>
                                    {% endif %}

                                    {% if Coupon.discount_type == 1 %}
                                        <td class=\"coupon_discount\">{{ Coupon.discount_price|price }}</td>
                                    {% elseif Coupon.discount_type == 2 %}
                                        <td class=\"coupon_discount\">{{ Coupon.discount_rate }} %</td>
                                    {% else %}
                                        <td class=\"coupon_discount\"></td>
                                    {% endif %}

                                    <td>{{ Coupon.coupon_use_time|number_format }} / {{ Coupon.coupon_release|number_format }}</td>
                                    <td>{{ Coupon.coupon_lower_limit|price }}</td>
                                    <td>{{ Coupon.available_from_date|date_format }} ～ {{ Coupon.available_to_date|date_format }}</td>

                                    <td><a href=\"{{ url('plugin_coupon_edit', { id: Coupon.id }) }}\">{{ 'admin.common.edit'|trans }}</a></td>
                                    <td>
                                        <a href=\"{{ url('plugin_coupon_enable', { id: Coupon.id }) }}\" {{ csrf_token_for_anchor() }} data-confirm=\"false\" data-method=\"put\">
                                        {% if Coupon.enable_flag == 1 %}
                                            {{ 'common.enabled'|trans }}
                                        {% else %}
                                            {{ 'common.disabled'|trans }}
                                        {% endif %}
                                        </a>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-{{ Coupon.id }}\" data-bs-tooltip=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'common.delete'|trans }}\">
                                            <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                        </a>

                                        <div class=\"modal fade\" id=\"confirmModal-{{ Coupon.id }}\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-{{ Coupon.id }}\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            {{ 'plugin_coupon.admin.index.delete__confirm_title'|trans }}</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body text-start\">
                                                        <p class=\"text-start\">
                                                            {{ 'plugin_coupon.admin.index.delete__confirm_message'|trans }}</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">{{ 'common.cancel'|trans }}
                                                        </button>
                                                        <a href=\"{{ url('plugin_coupon_delete', {'id' : Coupon.id}) }}\" class=\"btn btn-ec-delete\" data-confirm=\"false\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                            {{ 'common.delete'|trans }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"{{ url('plugin_coupon_new') }}\" class=\"btn btn-ec-regular ps-4 pe-4\">{{ 'plugin_coupon.admin.index.create_button'|trans }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
{% endblock %}
", "Coupon42/Resource/template/admin/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Coupon42\\Resource\\template\\admin\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 44, "if" => 45);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 24, "length" => 24, "price" => 66, "number_format" => 73, "date_format" => 75);
        static $functions = array("url" => 77, "csrf_token_for_anchor" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'raw', 'length', 'price', 'number_format', 'date_format'],
                ['url', 'csrf_token_for_anchor']
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
