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

/* B2BConnector/Migration/Version202510310001.php */
class __TwigTemplate_d2f2160ba942c3c94b892acdb7898e6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202510310001.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202510310001.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Migration;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

final class Version202510310001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_shipping_ext (depart_name, pic_name) and FK to dtb_shipping';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_shipping_ext')) {
            \$t = \$schema->createTable('dtb_shipping_ext');
            \$t->addColumn('id', 'integer', ['autoincrement' => true]);
            \$t->addColumn('shipping_id', 'integer', ['notnull' => true]);
            \$t->addColumn('depart_name', 'string', ['length' => 255, 'notnull' => false]);
            \$t->addColumn('pic_name', 'string', ['length' => 255, 'notnull' => false]);
            \$t->setPrimaryKey(['id']);
            \$t->addUniqueIndex(['shipping_id'], 'uniq_shipping_ext_shipping');
        }

        if (\$schema->hasTable('dtb_shipping_ext') && \$schema->hasTable('dtb_shipping')) {
            \$t = \$schema->getTable('dtb_shipping_ext');
            if (!\$t->hasForeignKey('fk_shipping_ext_shipping')) {
                \$t->addForeignKeyConstraint(
                    \$schema->getTable('dtb_shipping'),
                    ['shipping_id'], ['id'],
                    ['onDelete' => 'CASCADE'],
                    'fk_shipping_ext_shipping'
                );
            }
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_shipping_ext')) {
            \$schema->dropTable('dtb_shipping_ext');
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
        return "B2BConnector/Migration/Version202510310001.php";
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

final class Version202510310001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_shipping_ext (depart_name, pic_name) and FK to dtb_shipping';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_shipping_ext')) {
            \$t = \$schema->createTable('dtb_shipping_ext');
            \$t->addColumn('id', 'integer', ['autoincrement' => true]);
            \$t->addColumn('shipping_id', 'integer', ['notnull' => true]);
            \$t->addColumn('depart_name', 'string', ['length' => 255, 'notnull' => false]);
            \$t->addColumn('pic_name', 'string', ['length' => 255, 'notnull' => false]);
            \$t->setPrimaryKey(['id']);
            \$t->addUniqueIndex(['shipping_id'], 'uniq_shipping_ext_shipping');
        }

        if (\$schema->hasTable('dtb_shipping_ext') && \$schema->hasTable('dtb_shipping')) {
            \$t = \$schema->getTable('dtb_shipping_ext');
            if (!\$t->hasForeignKey('fk_shipping_ext_shipping')) {
                \$t->addForeignKeyConstraint(
                    \$schema->getTable('dtb_shipping'),
                    ['shipping_id'], ['id'],
                    ['onDelete' => 'CASCADE'],
                    'fk_shipping_ext_shipping'
                );
            }
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_shipping_ext')) {
            \$schema->dropTable('dtb_shipping_ext');
        }
    }
}
", "B2BConnector/Migration/Version202510310001.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Migration\\Version202510310001.php");
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
