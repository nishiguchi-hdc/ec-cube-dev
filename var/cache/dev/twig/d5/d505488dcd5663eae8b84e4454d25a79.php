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

/* B2BConnector/Migration/Version202511110001.php */
class __TwigTemplate_2c83980f8374c68652af627c54102c27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202511110001.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Migration/Version202511110001.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Migration;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

final class Version202511110001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create order extension table (dtb_order_ext)';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_order_ext')) {
            \$t = \$schema->createTable('dtb_order_ext');
            \$t->addColumn('order_id', 'integer');
            \$t->addColumn('depart_name', 'string', ['length' => 100, 'notnull' => false]);
            \$t->addColumn('pic_name', 'string', ['length' => 100, 'notnull' => false]);
            \$t->addColumn('quote_no', 'string', ['length' => 100, 'notnull' => false]);
            \$t->setPrimaryKey(['order_id']);
            \$t->addForeignKeyConstraint('dtb_order', ['order_id'], ['id'], [
                'onDelete' => 'CASCADE',
            ], 'fk_order_ext_order');
        } else {
            // 既存テーブルにカラムが無ければ追加入れる（再実行/差分吸収）
            \$t = \$schema->getTable('dtb_order_ext');
            foreach ([
                ['depart_name','string', ['length'=>100,'notnull'=>false]],
                ['pic_name','string', ['length'=>100,'notnull'=>false]],
                ['quote_no','string', ['length'=>100,'notnull'=>false]],
            ] as [\$name, \$type, \$opts]) {
                if (!\$t->hasColumn(\$name)) \$t->addColumn(\$name, \$type, \$opts);
            }
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_order_ext')) {
            \$schema->dropTable('dtb_order_ext');
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
        return "B2BConnector/Migration/Version202511110001.php";
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

final class Version202511110001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create order extension table (dtb_order_ext)';
    }

    public function up(Schema \$schema): void
    {
        if (!\$schema->hasTable('dtb_order_ext')) {
            \$t = \$schema->createTable('dtb_order_ext');
            \$t->addColumn('order_id', 'integer');
            \$t->addColumn('depart_name', 'string', ['length' => 100, 'notnull' => false]);
            \$t->addColumn('pic_name', 'string', ['length' => 100, 'notnull' => false]);
            \$t->addColumn('quote_no', 'string', ['length' => 100, 'notnull' => false]);
            \$t->setPrimaryKey(['order_id']);
            \$t->addForeignKeyConstraint('dtb_order', ['order_id'], ['id'], [
                'onDelete' => 'CASCADE',
            ], 'fk_order_ext_order');
        } else {
            // 既存テーブルにカラムが無ければ追加入れる（再実行/差分吸収）
            \$t = \$schema->getTable('dtb_order_ext');
            foreach ([
                ['depart_name','string', ['length'=>100,'notnull'=>false]],
                ['pic_name','string', ['length'=>100,'notnull'=>false]],
                ['quote_no','string', ['length'=>100,'notnull'=>false]],
            ] as [\$name, \$type, \$opts]) {
                if (!\$t->hasColumn(\$name)) \$t->addColumn(\$name, \$type, \$opts);
            }
        }
    }

    public function down(Schema \$schema): void
    {
        if (\$schema->hasTable('dtb_order_ext')) {
            \$schema->dropTable('dtb_order_ext');
        }
    }
}
", "B2BConnector/Migration/Version202511110001.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Migration\\Version202511110001.php");
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
