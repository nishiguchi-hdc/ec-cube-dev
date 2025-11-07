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

/* EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig */
class __TwigTemplate_c94b426df9518ca07c192fc11fa258ed extends Template
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
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig"));

        // line 3
        $context["menus"] = ["regular", "cycle"];
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.title.regular.cycle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.sub_title.regular.cycle.edit"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            var \$regularCycleFormRegularCycleType = \$('#regular_cycle_form_regular_cycle_type');
            setRegularCycleDayOrWeek(\$regularCycleFormRegularCycleType.val());
            \$regularCycleFormRegularCycleType.on('change', function() {
                if(\$(this).val() !== '') {
                    setRegularCycleDayOrWeek(\$(this).val())
                }
            });
        });
        function setRegularCycleDayOrWeek(regulerCycletypeId){
            var \$regularCycleFormDay = \$('#regular_cycle_form_day');
            var \$regularCycleFormWeek = \$('#regular_cycle_form_week');
            var selectedDayValue = \$regularCycleFormDay.find('option:selected').val();
            var selectedWeekValue = \$regularCycleFormWeek.find('option:selected').val();
            \$regularCycleFormDay.find('option').remove();
            \$regularCycleFormWeek.find('option').remove();
            var daily = {
                '-': '',
                '1日': '1',
                '2日': '2',
                '3日': '3',
                '4日': '4',
                '5日': '5',
                '6日': '6',
                '7日': '7',
                '8日': '8',
                '9日': '9',
                '10日': '10',
                '11日': '11',
                '12日': '12',
                '13日': '13',
                '14日': '14',
                '15日': '15',
                '16日': '16',
                '17日': '17',
                '18日': '18',
                '19日': '19',
                '20日': '20',
                '21日': '21',
                '22日': '22',
                '23日': '23',
                '24日': '24',
                '25日': '25',
                '26日': '26',
                '27日': '27',
                '28日': '28',
                '29日': '29',
                '30日': '30',
                '31日': '31',
                '32日': '32',
                '33日': '33',
                '34日': '34',
                '35日': '35',
                '36日': '36',
                '37日': '37',
                '38日': '38',
                '39日': '39',
                '40日': '40',
                '41日': '41',
                '42日': '42',
                '43日': '43',
                '44日': '44',
                '45日': '45',
                '46日': '46',
                '47日': '47',
                '48日': '48',
                '49日': '49',
                '50日': '50',
                '51日': '51',
                '52日': '52',
                '53日': '53',
                '54日': '54',
                '55日': '55',
                '56日': '56',
                '57日': '57',
                '58日': '58',
                '59日': '59',
                '60日': '60',
                '61日': '61',
                '62日': '62',
                '63日': '63',
                '64日': '64',
                '65日': '65',
                '66日': '66',
                '67日': '67',
                '68日': '68',
                '69日': '69',
                '70日': '70',
                '71日': '71',
                '72日': '72',
                '73日': '73',
                '74日': '74',
                '75日': '75',
                '76日': '76',
                '77日': '77',
                '78日': '78',
                '79日': '79',
                '80日': '80',
                '81日': '81',
                '82日': '82',
                '83日': '83',
                '84日': '84',
                '85日': '85',
                '86日': '86',
                '87日': '87',
                '88日': '88',
                '89日': '89',
                '90日': '90',
                '91日': '91',
                '92日': '92',
                '93日': '93',
                '94日': '94',
                '95日': '95',
                '96日': '96',
                '97日': '97',
                '98日': '98',
                '99日': '99',
            };
            var weekly = {
                '-': '',
                '1週間': '1',
                '2週間': '2',
                '3週間': '3',
                '4週間': '4',
            };
            var monthly = {
                '-': '',
                '1ヶ月': '1',
                '2ヶ月': '2',
                '3ヶ月': '3',
                '4ヶ月': '4',
                '5ヶ月': '5',
                '6ヶ月': '6',
                '7ヶ月': '7',
                '8ヶ月': '8',
                '9ヶ月': '9',
                '10ヶ月': '10',
                '11ヶ月': '11',
                '12ヶ月': '12',
            };
            var specificDay = {
                '-': '',
                '1日': '1',
                '2日': '2',
                '3日': '3',
                '4日': '4',
                '5日': '5',
                '6日': '6',
                '7日': '7',
                '8日': '8',
                '9日': '9',
                '10日': '10',
                '11日': '11',
                '12日': '12',
                '13日': '13',
                '14日': '14',
                '15日': '15',
                '16日': '16',
                '17日': '17',
                '18日': '18',
                '19日': '19',
                '20日': '20',
                '21日': '21',
                '22日': '22',
                '23日': '23',
                '24日': '24',
                '25日': '25',
                '26日': '26',
                '27日': '27',
                '28日': '28',
                '29日': '29',
                '30日': '30',
                '31日': '31',
            };
            var week = {
                '-': '',
                '日曜日': '";
        // line 193
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::SUNDAY"), "html", null, true);
        echo "',
                '月曜日': '";
        // line 194
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::MONDAY"), "html", null, true);
        echo "',
                '火曜日': '";
        // line 195
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::TUESDAY"), "html", null, true);
        echo "',
                '水曜日': '";
        // line 196
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::WEDNESDAY"), "html", null, true);
        echo "',
                '木曜日': '";
        // line 197
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::THURSDAY"), "html", null, true);
        echo "',
                '金曜日': '";
        // line 198
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::FRIDAY"), "html", null, true);
        echo "',
                '土曜日': '";
        // line 199
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycle::SATURDAY"), "html", null, true);
        echo "',
            };
            if (regulerCycletypeId === '";
        // line 201
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType::REGULAR_DAILY_CYCLE"), "html", null, true);
        echo "') {
                changeOptions(daily, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '";
        // line 205
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType::REGULAR_WEEKLY_CYCLE"), "html", null, true);
        echo "') {
                changeOptions(weekly, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '";
        // line 209
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType::REGULAR_MONTHLY_CYCLE"), "html", null, true);
        echo "') {
                changeOptions(monthly, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '";
        // line 213
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE"), "html", null, true);
        echo "') {
                changeOptions(specificDay, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '";
        // line 217
        echo twig_escape_filter($this->env, twig_constant("Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE"), "html", null, true);
        echo "') {
                changeOptions(week, selectedWeekValue, \$regularCycleFormWeek);
                \$regularCycleFormDay.prop('disabled', true);
                \$regularCycleFormWeek.prop('disabled', false);
            } else {
                \$regularCycleFormDay.prop('disabled', true);
                \$regularCycleFormWeek.prop('disabled', true);
            }
        }
        function changeOptions(dayObj, selectedValue, \$target) {
            \$.each(dayObj, function (key, value) {
                \$option = \$('<option>')
                    .val(value)
                    .text(key);
                if (selectedValue === value) {
                    \$option.prop('selected', true);
                }
                \$target.append(\$option)
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 240
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 241
        echo "    <form
        id=\"regular_cycle_form\"
        method=\"post\"
        action=\"";
        // line 244
        ((array_key_exists("regular_cycle_id", $context)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_edit", ["id" => (isset($context["regular_cycle_id"]) || array_key_exists("regular_cycle_id", $context) ? $context["regular_cycle_id"] : (function () { throw new RuntimeError('Variable "regular_cycle_id" does not exist.', 244, $this->source); })())]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_new"))));
        echo "\">
    <form>
        ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "_token", [], "any", false, false, true, 246), 246, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>定期サイクル設定</span></div>
                        <div id=\"ex-regular-cycle\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.edit.label.regular_cycle_type"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "regular_cycle_type", [], "any", false, false, true, 256), 256, $this->source), 'widget');
        echo "
                                    ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "regular_cycle_type", [], "any", false, false, true, 257), 257, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.edit.label.day"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "day", [], "any", false, false, true, 263), 263, $this->source), 'widget');
        echo "
                                    ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "day", [], "any", false, false, true, 264), 264, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.edit.label.week"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "week", [], "any", false, false, true, 270), 270, $this->source), 'widget');
        echo "
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "week", [], "any", false, false, true, 271), 271, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.cycle.index"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
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
        return "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig";
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
        return array (  513 => 292,  503 => 285,  499 => 284,  483 => 271,  479 => 270,  474 => 268,  467 => 264,  463 => 263,  458 => 261,  451 => 257,  447 => 256,  442 => 254,  431 => 246,  426 => 244,  421 => 241,  411 => 240,  379 => 217,  372 => 213,  365 => 209,  358 => 205,  351 => 201,  346 => 199,  342 => 198,  338 => 197,  334 => 196,  330 => 195,  326 => 194,  322 => 193,  141 => 15,  137 => 14,  133 => 13,  128 => 12,  118 => 11,  99 => 6,  80 => 5,  69 => 1,  67 => 8,  65 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}

{% set menus = ['regular', 'cycle'] %}

{% block title %}{{ 'gmo_epsilon.admin.title.regular.cycle'|trans }}{% endblock %}
{% block sub_title %}{{ 'gmo_epsilon.admin.sub_title.regular.cycle.edit'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}


{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script>
        \$(function() {
            var \$regularCycleFormRegularCycleType = \$('#regular_cycle_form_regular_cycle_type');
            setRegularCycleDayOrWeek(\$regularCycleFormRegularCycleType.val());
            \$regularCycleFormRegularCycleType.on('change', function() {
                if(\$(this).val() !== '') {
                    setRegularCycleDayOrWeek(\$(this).val())
                }
            });
        });
        function setRegularCycleDayOrWeek(regulerCycletypeId){
            var \$regularCycleFormDay = \$('#regular_cycle_form_day');
            var \$regularCycleFormWeek = \$('#regular_cycle_form_week');
            var selectedDayValue = \$regularCycleFormDay.find('option:selected').val();
            var selectedWeekValue = \$regularCycleFormWeek.find('option:selected').val();
            \$regularCycleFormDay.find('option').remove();
            \$regularCycleFormWeek.find('option').remove();
            var daily = {
                '-': '',
                '1日': '1',
                '2日': '2',
                '3日': '3',
                '4日': '4',
                '5日': '5',
                '6日': '6',
                '7日': '7',
                '8日': '8',
                '9日': '9',
                '10日': '10',
                '11日': '11',
                '12日': '12',
                '13日': '13',
                '14日': '14',
                '15日': '15',
                '16日': '16',
                '17日': '17',
                '18日': '18',
                '19日': '19',
                '20日': '20',
                '21日': '21',
                '22日': '22',
                '23日': '23',
                '24日': '24',
                '25日': '25',
                '26日': '26',
                '27日': '27',
                '28日': '28',
                '29日': '29',
                '30日': '30',
                '31日': '31',
                '32日': '32',
                '33日': '33',
                '34日': '34',
                '35日': '35',
                '36日': '36',
                '37日': '37',
                '38日': '38',
                '39日': '39',
                '40日': '40',
                '41日': '41',
                '42日': '42',
                '43日': '43',
                '44日': '44',
                '45日': '45',
                '46日': '46',
                '47日': '47',
                '48日': '48',
                '49日': '49',
                '50日': '50',
                '51日': '51',
                '52日': '52',
                '53日': '53',
                '54日': '54',
                '55日': '55',
                '56日': '56',
                '57日': '57',
                '58日': '58',
                '59日': '59',
                '60日': '60',
                '61日': '61',
                '62日': '62',
                '63日': '63',
                '64日': '64',
                '65日': '65',
                '66日': '66',
                '67日': '67',
                '68日': '68',
                '69日': '69',
                '70日': '70',
                '71日': '71',
                '72日': '72',
                '73日': '73',
                '74日': '74',
                '75日': '75',
                '76日': '76',
                '77日': '77',
                '78日': '78',
                '79日': '79',
                '80日': '80',
                '81日': '81',
                '82日': '82',
                '83日': '83',
                '84日': '84',
                '85日': '85',
                '86日': '86',
                '87日': '87',
                '88日': '88',
                '89日': '89',
                '90日': '90',
                '91日': '91',
                '92日': '92',
                '93日': '93',
                '94日': '94',
                '95日': '95',
                '96日': '96',
                '97日': '97',
                '98日': '98',
                '99日': '99',
            };
            var weekly = {
                '-': '',
                '1週間': '1',
                '2週間': '2',
                '3週間': '3',
                '4週間': '4',
            };
            var monthly = {
                '-': '',
                '1ヶ月': '1',
                '2ヶ月': '2',
                '3ヶ月': '3',
                '4ヶ月': '4',
                '5ヶ月': '5',
                '6ヶ月': '6',
                '7ヶ月': '7',
                '8ヶ月': '8',
                '9ヶ月': '9',
                '10ヶ月': '10',
                '11ヶ月': '11',
                '12ヶ月': '12',
            };
            var specificDay = {
                '-': '',
                '1日': '1',
                '2日': '2',
                '3日': '3',
                '4日': '4',
                '5日': '5',
                '6日': '6',
                '7日': '7',
                '8日': '8',
                '9日': '9',
                '10日': '10',
                '11日': '11',
                '12日': '12',
                '13日': '13',
                '14日': '14',
                '15日': '15',
                '16日': '16',
                '17日': '17',
                '18日': '18',
                '19日': '19',
                '20日': '20',
                '21日': '21',
                '22日': '22',
                '23日': '23',
                '24日': '24',
                '25日': '25',
                '26日': '26',
                '27日': '27',
                '28日': '28',
                '29日': '29',
                '30日': '30',
                '31日': '31',
            };
            var week = {
                '-': '',
                '日曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::SUNDAY') }}',
                '月曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::MONDAY') }}',
                '火曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::TUESDAY') }}',
                '水曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::WEDNESDAY') }}',
                '木曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::THURSDAY') }}',
                '金曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::FRIDAY') }}',
                '土曜日': '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycle::SATURDAY') }}',
            };
            if (regulerCycletypeId === '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycleType::REGULAR_DAILY_CYCLE') }}') {
                changeOptions(daily, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycleType::REGULAR_WEEKLY_CYCLE') }}') {
                changeOptions(weekly, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycleType::REGULAR_MONTHLY_CYCLE') }}') {
                changeOptions(monthly, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE') }}') {
                changeOptions(specificDay, selectedDayValue, \$regularCycleFormDay);
                \$regularCycleFormDay.prop('disabled', false);
                \$regularCycleFormWeek.prop('disabled', true);
            } else if (regulerCycletypeId === '{{ constant('Plugin\\\\EccubePaymentLite42\\\\Entity\\\\RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE') }}') {
                changeOptions(week, selectedWeekValue, \$regularCycleFormWeek);
                \$regularCycleFormDay.prop('disabled', true);
                \$regularCycleFormWeek.prop('disabled', false);
            } else {
                \$regularCycleFormDay.prop('disabled', true);
                \$regularCycleFormWeek.prop('disabled', true);
            }
        }
        function changeOptions(dayObj, selectedValue, \$target) {
            \$.each(dayObj, function (key, value) {
                \$option = \$('<option>')
                    .val(value)
                    .text(key);
                if (selectedValue === value) {
                    \$option.prop('selected', true);
                }
                \$target.append(\$option)
            });
        }
    </script>
{% endblock javascript %}

{% block main %}
    <form
        id=\"regular_cycle_form\"
        method=\"post\"
        action=\"{{ regular_cycle_id is defined ? url('eccube_payment_lite42_admin_regular_cycle_edit', {'id': regular_cycle_id}) : url('eccube_payment_lite42_admin_regular_cycle_new') }}\">
    <form>
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>定期サイクル設定</span></div>
                        <div id=\"ex-regular-cycle\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.regular.edit.label.regular_cycle_type'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_cycle_type) }}
                                    {{ form_errors(form.regular_cycle_type) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.regular.edit.label.day'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.day) }}
                                    {{ form_errors(form.day) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.regular.edit.label.week'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.week) }}
                                    {{ form_errors(form.week) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('eccube_payment_lite42_admin_regular_cycle') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'gmo_epsilon.admin.regular.cycle.index'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Cycle\\edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 8);
        static $filters = array("escape" => 5, "trans" => 5);
        static $functions = array("asset" => 12, "constant" => 193, "url" => 244, "form_widget" => 246, "form_errors" => 257);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['asset', 'constant', 'url', 'form_widget', 'form_errors']
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
