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

/* B2BConnector/Migration/Version202510270001.php */
class __TwigTemplate_6a8019288d5993c12fc41cf87ed63ec3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202510270001.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202510270001.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Migration;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

final class Version202510270001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_customer_ext for B2B fields';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_customer_ext')) {
            \$table = \$schema->createTable('dtb_customer_ext');
            \$table->addColumn('customer_id', 'integer');
            \$table->addColumn('company_kana', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_name01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_name02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_kana01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_kana02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('depart_name', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_name01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_name02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_kana01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_kana02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('mb_phone_number', 'string', ['notnull' => false, 'length' => 50]);
            \$table->addColumn('fax_number', 'string', ['notnull' => false, 'length' => 50]);
            \$table->addColumn('established_ym', 'string', ['notnull' => false, 'length' => 7]); // YYYY-MM
            \$table->addColumn('annual_sales', 'bigint', ['notnull' => false]);
            \$table->addColumn('business_type', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('url', 'string', ['notnull' => false, 'length' => 512]);
            \$table->addColumn('real_store', 'boolean', ['default' => false]);
            \$table->addColumn('trade_rate', 'decimal', ['precision' => 5, 'scale' => 2, 'notnull' => false]);
            \$table->setPrimaryKey(['customer_id']);
            \$table->addForeignKeyConstraint('dtb_customer', ['customer_id'], ['id'], ['onDelete' => 'CASCADE']);
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_customer_ext')) {
            \$schema->dropTable('dtb_customer_ext');
        }
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
        return "B2BConnector/Migration/Version202510270001.php";
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

namespace Plugin\\B2BConnector\\Migration;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

final class Version202510270001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_customer_ext for B2B fields';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_customer_ext')) {
            \$table = \$schema->createTable('dtb_customer_ext');
            \$table->addColumn('customer_id', 'integer');
            \$table->addColumn('company_kana', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_name01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_name02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_kana01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('rep_kana02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('depart_name', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_name01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_name02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_kana01', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('pic_kana02', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('mb_phone_number', 'string', ['notnull' => false, 'length' => 50]);
            \$table->addColumn('fax_number', 'string', ['notnull' => false, 'length' => 50]);
            \$table->addColumn('established_ym', 'string', ['notnull' => false, 'length' => 7]); // YYYY-MM
            \$table->addColumn('annual_sales', 'bigint', ['notnull' => false]);
            \$table->addColumn('business_type', 'string', ['notnull' => false, 'length' => 255]);
            \$table->addColumn('url', 'string', ['notnull' => false, 'length' => 512]);
            \$table->addColumn('real_store', 'boolean', ['default' => false]);
            \$table->addColumn('trade_rate', 'decimal', ['precision' => 5, 'scale' => 2, 'notnull' => false]);
            \$table->setPrimaryKey(['customer_id']);
            \$table->addForeignKeyConstraint('dtb_customer', ['customer_id'], ['id'], ['onDelete' => 'CASCADE']);
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_customer_ext')) {
            \$schema->dropTable('dtb_customer_ext');
        }
    }
}
", "B2BConnector/Migration/Version202510270001.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Migration\\Version202510270001.php");
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
