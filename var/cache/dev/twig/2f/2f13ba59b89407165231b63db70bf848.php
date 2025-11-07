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

/* AmazonPayV2_42_Bundle/Controller/Admin/ConfigController.php */
class __TwigTemplate_d15870915edcdfe1f114eceee288f703 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Controller/Admin/ConfigController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Controller/Admin/ConfigController.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Admin\\ConfigType;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ConfigController extends AbstractController
{
    /**
     * @var ValidatorInterface
     */
    protected \$validator;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * ConfigController constructor.
     * 
     * @param ValidatorInterface \$validator
     * @param ConfigRepository \$configRepository
     */
    public function __construct(
        ValidatorInterface \$validator,
        ConfigRepository \$configRepository
    ) {
        \$this->validator = \$validator;
        \$this->configRepository = \$configRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/amazon_pay_v2_42/config\", name=\"amazon_pay_v2.42.bundle_admin_config\")
     * @Template(\"@AmazonPayV2_42_Bundle/admin/config.twig\")
     */
    public function index(Request \$request)
    {
        \$Config = \$this->configRepository->get(true);
        \$form = \$this->createForm(ConfigType::class, \$Config);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$Config = \$form->getData();
            if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
                // 本番環境切り替え時
                \$prod_key = \$Config->getProdKey();
                \$errors = \$this->validator->validate(
                    \$prod_key,
                    [
                        new Assert\\NotBlank(),
                    ]
                );
                if (\$errors->count() != 0) {
                    foreach (\$errors as \$error) {
                        \$messages[] = \$error->getMessage();
                    }
                    \$form['prod_key']->addError(new FormError(\$messages[0]));
                } else if (!password_verify(\$prod_key, '\$2y\$10\$m3aYrihBaIKarlrmI39tGORK4fFBC7cWoSLFy6jkMpT7IduYVsVtO')) {
                    \$form['prod_key']->addError(new FormError('本番切り替えキーは有効なキーではありません。'));
                }
            }

            if (\$Config->getAmazonAccountMode() == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned']) {
                \$privateKeyPath = \$this->getParameter('kernel.project_dir') . '/' . \$Config->getPrivateKeyPath();
                if (mb_substr(\$Config->getPrivateKeyPath(), 0, 1) == '/') {
                    \$form['private_key_path']->addError(new FormError('プライベートキーパスの先頭に\"/\"は利用できません'));
                } elseif (!is_file(\$privateKeyPath) || file_exists(\$privateKeyPath) === false) {
                    \$form['private_key_path']->addError(new FormError('プライベートキーファイルが見つかりません。'));
                }
            }

            if (\$form->isSubmitted() && \$form->isValid()) {
                \$this->entityManager->persist(\$Config);
                \$this->entityManager->flush(\$Config);

                \$this->addSuccess('amazon_pay_v2.admin.save.success', 'admin');
                return \$this->redirectToRoute('amazon_pay_v2.42.bundle_admin_config');
            }
        }

        \$testAccount = \$this->eccubeConfig['amazon_pay_v2']['test_account'];

        return [
            'form' => \$form->createView(),
            'testAccount' => \$testAccount,
        ];
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
        return "AmazonPayV2_42_Bundle/Controller/Admin/ConfigController.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Admin\\ConfigType;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ConfigController extends AbstractController
{
    /**
     * @var ValidatorInterface
     */
    protected \$validator;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * ConfigController constructor.
     * 
     * @param ValidatorInterface \$validator
     * @param ConfigRepository \$configRepository
     */
    public function __construct(
        ValidatorInterface \$validator,
        ConfigRepository \$configRepository
    ) {
        \$this->validator = \$validator;
        \$this->configRepository = \$configRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/amazon_pay_v2_42/config\", name=\"amazon_pay_v2.42.bundle_admin_config\")
     * @Template(\"@AmazonPayV2_42_Bundle/admin/config.twig\")
     */
    public function index(Request \$request)
    {
        \$Config = \$this->configRepository->get(true);
        \$form = \$this->createForm(ConfigType::class, \$Config);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$Config = \$form->getData();
            if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
                // 本番環境切り替え時
                \$prod_key = \$Config->getProdKey();
                \$errors = \$this->validator->validate(
                    \$prod_key,
                    [
                        new Assert\\NotBlank(),
                    ]
                );
                if (\$errors->count() != 0) {
                    foreach (\$errors as \$error) {
                        \$messages[] = \$error->getMessage();
                    }
                    \$form['prod_key']->addError(new FormError(\$messages[0]));
                } else if (!password_verify(\$prod_key, '\$2y\$10\$m3aYrihBaIKarlrmI39tGORK4fFBC7cWoSLFy6jkMpT7IduYVsVtO')) {
                    \$form['prod_key']->addError(new FormError('本番切り替えキーは有効なキーではありません。'));
                }
            }

            if (\$Config->getAmazonAccountMode() == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned']) {
                \$privateKeyPath = \$this->getParameter('kernel.project_dir') . '/' . \$Config->getPrivateKeyPath();
                if (mb_substr(\$Config->getPrivateKeyPath(), 0, 1) == '/') {
                    \$form['private_key_path']->addError(new FormError('プライベートキーパスの先頭に\"/\"は利用できません'));
                } elseif (!is_file(\$privateKeyPath) || file_exists(\$privateKeyPath) === false) {
                    \$form['private_key_path']->addError(new FormError('プライベートキーファイルが見つかりません。'));
                }
            }

            if (\$form->isSubmitted() && \$form->isValid()) {
                \$this->entityManager->persist(\$Config);
                \$this->entityManager->flush(\$Config);

                \$this->addSuccess('amazon_pay_v2.admin.save.success', 'admin');
                return \$this->redirectToRoute('amazon_pay_v2.42.bundle_admin_config');
            }
        }

        \$testAccount = \$this->eccubeConfig['amazon_pay_v2']['test_account'];

        return [
            'form' => \$form->createView(),
            'testAccount' => \$testAccount,
        ];
    }
}
", "AmazonPayV2_42_Bundle/Controller/Admin/ConfigController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Controller\\Admin\\ConfigController.php");
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
