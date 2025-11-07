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

/* Api42/Resource/template/admin/OAuth/index.twig */
class __TwigTemplate_5111c2232bee933851602fb397f1aca6 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/template/admin/OAuth/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/template/admin/OAuth/index.twig"));

        // line 13
        $context["menus"] = ["setting", "api", "oauth"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/OAuth/index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.management"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script>
        \$(function() {
            \$('.copy-secret').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this);
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copied"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('hide');
                     }, 3000);
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 42
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.endpoint"), "html", null, true);
        echo "</span></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.authorization_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oauth2_authorize");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.token_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oauth2_token");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.api_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"create-client\" class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_api_oauth_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\" style=\"table-layout:fixed;\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.identifier"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.secret"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.scope"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.redirect_uri"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.grant_type"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 108
            echo "                                <tr id=\"client-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "\">
                                    <td class=\"align-middle text-center ps-3\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
            echo "\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "Secret", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
            echo "\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "scopes", [], "any", false, false, true, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
                // line 117
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["scope"], 117, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                                    </td>
                                    <td class=\"align-middle text-center\">
                                        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "redirectUris", [], "any", false, false, true, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["redirectUri"]) {
                // line 122
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["redirectUri"], 122, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirectUri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "grants", [], "any", false, false, true, 126), function ($__grant__) use ($context, $macros) { $context["grant"] = $__grant__; return ($context["grant"] != "refresh_token"); }));
            foreach ($context['_seq'] as $context["_key"] => $context["grant"]) {
                // line 127
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["grant"], 127, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                                    </td>
                                    <td class=\"align-middle pe-3\">
                                        <div class=\"text-end\">
                                            <div class=\"px-1 d-inline-block\">
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                     data-placement=\"top\" title=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#oauth_delete_";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"oauth_delete_";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                                     role=\"dialog\" aria-labelledby=\"oauth_delete_";
            // line 141
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">
                                                                    ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.delete__confirm_title"), "html", null, true);
            echo "
                                                                </h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.delete__confirm_message"), "html", null, true);
            echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                    ";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                                </button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_api_oauth_delete", ["identifier" => twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 157)]), "html", null, true);
            echo "\"
                                                                    ";
            // line 158
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-confirm=\"false\">
                                                                    ";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <a class=\"btn btn-ec-conversion ladda-button\" href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_api_oauth_clear_expired_tokens");
        echo "\"
                        ";
        // line 176
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo " data-method=\"delete\" data-confirm=\"false\">
                        ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.clear_expired_tokens"), "html", null, true);
        echo "
                    </a>
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
        return "Api42/Resource/template/admin/OAuth/index.twig";
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
        return array (  450 => 177,  446 => 176,  442 => 175,  435 => 170,  418 => 159,  414 => 158,  410 => 157,  405 => 155,  398 => 151,  390 => 146,  382 => 141,  378 => 140,  371 => 136,  366 => 134,  359 => 129,  350 => 127,  346 => 126,  342 => 124,  333 => 122,  329 => 121,  325 => 119,  316 => 117,  312 => 116,  304 => 113,  296 => 110,  290 => 108,  286 => 107,  277 => 101,  271 => 98,  265 => 95,  259 => 92,  253 => 89,  240 => 81,  229 => 75,  222 => 71,  211 => 65,  204 => 61,  193 => 55,  186 => 51,  178 => 46,  172 => 42,  162 => 41,  143 => 31,  135 => 26,  126 => 19,  116 => 18,  97 => 16,  78 => 15,  67 => 11,  65 => 13,  40 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['setting', 'api', 'oauth'] %}

{% block title %}{{ 'api.admin.oauth.management'|trans }}{% endblock %}
{% block sub_title %}{{ 'api.admin.management'|trans }}{% endblock %}

{% block javascript %}
    <script>
        \$(function() {
            \$('.copy-secret').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this);
                    setTimeout(function() {
                        action_copy.attr('title', '{{ 'api.admin.oauth.copied'|trans }}');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                    setTimeout(function() {
                        action_copy.attr('title', '{{ 'api.admin.oauth.copy'|trans }}');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('hide');
                     }, 3000);
                }
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span>{{ 'api.admin.oauth.endpoint'|trans }}</span></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>{{ 'api.admin.oauth.authorization_endpoint'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"{{ url('oauth2_authorize') }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'api.admin.oauth.copy'|trans }}\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>{{ 'api.admin.oauth.token_endpoint'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"{{ url('oauth2_token') }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'api.admin.oauth.copy'|trans }}\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>{{ 'api.admin.oauth.api_endpoint'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"{{ url('api') }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'api.admin.oauth.copy'|trans }}\" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"create-client\" class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_api_oauth_new') }}\">{{ 'admin.common.registration__new'|trans }}</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\" style=\"table-layout:fixed;\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    {{ 'api.admin.oauth.identifier'|trans }}
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    {{ 'api.admin.oauth.secret'|trans }}
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    {{ 'api.admin.oauth.scope'|trans }}
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    {{ 'api.admin.oauth.redirect_uri'|trans }}
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    {{ 'api.admin.oauth.grant_type'|trans }}
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for client in clients %}
                                <tr id=\"client-{{ client.identifier }}\">
                                    <td class=\"align-middle text-center ps-3\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"{{ client.identifier }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'api.admin.oauth.copy'|trans }}\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"{{ client.Secret }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'api.admin.oauth.copy'|trans }}\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        {% for scope in client.scopes %}
                                            {{ scope }}<br>
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        {% for redirectUri in client.redirectUris %}
                                            {{ redirectUri }}<br>
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        {% for grant in client.grants|filter(grant => grant != 'refresh_token') %}
                                            {{ grant }}<br>
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle pe-3\">
                                        <div class=\"text-end\">
                                            <div class=\"px-1 d-inline-block\">
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                     data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#oauth_delete_{{ client.identifier }}\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"oauth_delete_{{ client.identifier }}\" tabindex=\"-1\"
                                                     role=\"dialog\" aria-labelledby=\"oauth_delete_{{ client.identifier }}\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">
                                                                    {{ 'api.admin.oauth.delete__confirm_title'|trans }}
                                                                </h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">{{ 'api.admin.oauth.delete__confirm_message'|trans }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                    {{ 'admin.common.cancel'|trans }}
                                                                </button>
                                                                <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_api_oauth_delete', {identifier: client.identifier}) }}\"
                                                                    {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                    {{ 'admin.common.delete'|trans }}
                                                                </a>
                                                            </div>
                                                        </div>
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
                <div class=\"card rounded border-0 mb-4\">
                    <a class=\"btn btn-ec-conversion ladda-button\" href=\"{{ url('admin_api_oauth_clear_expired_tokens') }}\"
                        {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                        {{ 'api.admin.oauth.clear_expired_tokens'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Api42/Resource/template/admin/OAuth/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Api42\\Resource\\template\\admin\\OAuth\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 107);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 126);
        static $functions = array("url" => 55, "csrf_token_for_anchor" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trans', 'filter'],
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
