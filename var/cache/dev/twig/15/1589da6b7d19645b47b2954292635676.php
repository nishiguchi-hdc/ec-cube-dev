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

/* AmazonPayV2_42_Bundle/Repository/ConfigRepository.php */
class __TwigTemplate_4b99bfc194f3c5be825289354fd77732 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Repository/ConfigRepository.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Repository/ConfigRepository.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Repository;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Repository\\AbstractRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Doctrine\\Persistence\\ManagerRegistry;

class ConfigRepository extends AbstractRepository
{
    public function __construct(
        EccubeConfig \$eccubeConfig,
        ManagerRegistry \$managerRegistry,
        \$entityClass = Config::class
    ) {
        parent::__construct(\$managerRegistry, \$entityClass);

        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function get(\$setting = false)
    {
        \$Config = \$this->find(1);

        if (
            \$setting === false &&
            \$Config->getAmazonAccountMode() == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared']
        ) {
            \$Config->setSellerId(\$this->eccubeConfig['amazon_pay_v2']['test_account']['seller_id']);
            \$Config->setPublicKeyId(\$this->eccubeConfig['amazon_pay_v2']['test_account']['public_key_id']);
            \$Config->setPrivateKeyPath(\$this->eccubeConfig['amazon_pay_v2']['test_account']['private_key_path']);
            \$Config->setClientId(\$Config->getTestClientId());
        }

        return \$Config;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Repository/ConfigRepository.php";
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
        return new Source("<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Repository;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Repository\\AbstractRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Doctrine\\Persistence\\ManagerRegistry;

class ConfigRepository extends AbstractRepository
{
    public function __construct(
        EccubeConfig \$eccubeConfig,
        ManagerRegistry \$managerRegistry,
        \$entityClass = Config::class
    ) {
        parent::__construct(\$managerRegistry, \$entityClass);

        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function get(\$setting = false)
    {
        \$Config = \$this->find(1);

        if (
            \$setting === false &&
            \$Config->getAmazonAccountMode() == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared']
        ) {
            \$Config->setSellerId(\$this->eccubeConfig['amazon_pay_v2']['test_account']['seller_id']);
            \$Config->setPublicKeyId(\$this->eccubeConfig['amazon_pay_v2']['test_account']['public_key_id']);
            \$Config->setPrivateKeyPath(\$this->eccubeConfig['amazon_pay_v2']['test_account']['private_key_path']);
            \$Config->setClientId(\$Config->getTestClientId());
        }

        return \$Config;
    }
}
", "AmazonPayV2_42_Bundle/Repository/ConfigRepository.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository.php");
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
