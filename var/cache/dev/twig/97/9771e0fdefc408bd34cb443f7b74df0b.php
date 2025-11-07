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

/* AmazonPayV2_42_Bundle/Resource/config/services.yaml */
class __TwigTemplate_a922ecb4debe8814757d4d53b0afe4ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/config/services.yaml"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/config/services.yaml"));

        // line 1
        echo "parameters:
  amazon_pay_v2:
    test_account:
      seller_id: A2A80MN1XQCQBA
      public_key_id: AGWGWRKYSUOV4KUBKCQNV4UB
      private_key_path: app/Plugin/AmazonPayV2_42_Bundle/Resource/key/Test_Eccube_Demo_AmazonPay.pem
    max_billable_amount: 70000
    amazon_sc_url: https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId=
    toggle:
      off: 0
      on: 1
    account_mode:
      shared: 1
      owned: 2
    env:
      sandbox: 1
      prod: 2
    sale:
      authori: 1
      capture: 2
    button_place:
      auto: 1
      manual: 2
    api:
      config:
        thlottle_err_limit: 5
        thlottle_sleep: 2
        authorize_limit: 3
      payload:
        currency_code: 'JPY'
      prod:
        checkout_script_url: https://static-fe.payments-amazon.com/checkout.js
      sandbox:
        checkout_script_url: https://static-fe.payments-amazon.com/checkout.js
      error:
        payment_method_not_allowed: 1
        invalid_payment_method: 2
        amazon_rejected: 3
        transaction_timeout: 4
monolog:
    channels: ['amazon_pay_v2']
    handlers:
        amazon_pay:
            type: fingers_crossed
            action_level: error
            passthru_level: info
            handler: amazon_pay_rotating_file
            channels: ['amazon_pay_v2']
        amazon_pay_rotating_file:
            type: rotating_file
            max_files: 60
            path: '%kernel.logs_dir%/%kernel.environment%/amazon_pay_v2.log'
            formatter: amazon_pay.log.formatter.line
            level: debug

services:
    amazon_pay.log.formatter.line:
        class: Monolog\\Formatter\\LineFormatter
        arguments:
            - \"[%%datetime%%] %%channel%%.%%level_name%% [%%extra.session_id%%] [%%extra.uid%%] [%%extra.user_id%%] [%%extra.class%%:%%extra.function%%:%%extra.line%%] - %%message%% %%context%% [%%extra.http_method%%, %%extra.url%%, %%extra.ip%%, %%extra.referrer%%, %%extra.user_agent%%]\\n\"
            - \"Y-m-d H:i:s.u\"
    Psr\\Container\\ContainerInterface:
        lazy: true
    # 以下、手動で書き換えの項目
    Plugin\\AmazonPayV2_42_Bundle\\AmazonPayEvent:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonIPNService:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension\\AmazonCustomerExtension:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/config/services.yaml";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
  amazon_pay_v2:
    test_account:
      seller_id: A2A80MN1XQCQBA
      public_key_id: AGWGWRKYSUOV4KUBKCQNV4UB
      private_key_path: app/Plugin/AmazonPayV2_42_Bundle/Resource/key/Test_Eccube_Demo_AmazonPay.pem
    max_billable_amount: 70000
    amazon_sc_url: https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId=
    toggle:
      off: 0
      on: 1
    account_mode:
      shared: 1
      owned: 2
    env:
      sandbox: 1
      prod: 2
    sale:
      authori: 1
      capture: 2
    button_place:
      auto: 1
      manual: 2
    api:
      config:
        thlottle_err_limit: 5
        thlottle_sleep: 2
        authorize_limit: 3
      payload:
        currency_code: 'JPY'
      prod:
        checkout_script_url: https://static-fe.payments-amazon.com/checkout.js
      sandbox:
        checkout_script_url: https://static-fe.payments-amazon.com/checkout.js
      error:
        payment_method_not_allowed: 1
        invalid_payment_method: 2
        amazon_rejected: 3
        transaction_timeout: 4
monolog:
    channels: ['amazon_pay_v2']
    handlers:
        amazon_pay:
            type: fingers_crossed
            action_level: error
            passthru_level: info
            handler: amazon_pay_rotating_file
            channels: ['amazon_pay_v2']
        amazon_pay_rotating_file:
            type: rotating_file
            max_files: 60
            path: '%kernel.logs_dir%/%kernel.environment%/amazon_pay_v2.log'
            formatter: amazon_pay.log.formatter.line
            level: debug

services:
    amazon_pay.log.formatter.line:
        class: Monolog\\Formatter\\LineFormatter
        arguments:
            - \"[%%datetime%%] %%channel%%.%%level_name%% [%%extra.session_id%%] [%%extra.uid%%] [%%extra.user_id%%] [%%extra.class%%:%%extra.function%%:%%extra.line%%] - %%message%% %%context%% [%%extra.http_method%%, %%extra.url%%, %%extra.ip%%, %%extra.referrer%%, %%extra.user_agent%%]\\n\"
            - \"Y-m-d H:i:s.u\"
    Psr\\Container\\ContainerInterface:
        lazy: true
    # 以下、手動で書き換えの項目
    Plugin\\AmazonPayV2_42_Bundle\\AmazonPayEvent:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonIPNService:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
    Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension\\AmazonCustomerExtension:
        arguments:
            \$container: !service_locator
                Psr\\Container\\ContainerInterface: '@Psr\\Container\\ContainerInterface'
        autowire: true
        autoconfigure: true
        public: false
", "AmazonPayV2_42_Bundle/Resource/config/services.yaml", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\config\\services.yaml");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
