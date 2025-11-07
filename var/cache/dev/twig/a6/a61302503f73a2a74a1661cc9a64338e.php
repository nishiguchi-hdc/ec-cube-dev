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

/* AmazonPayV2_42_Bundle/Exception/AmazonPaymentException.php */
class __TwigTemplate_ef51368f25ba6f7aff3c41b1288d23af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Exception/AmazonPaymentException.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Exception/AmazonPaymentException.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle\\Exception;

class AmazonPaymentException extends \\Exception
{
    // ErrorCodes.
    const UNDEFINED = false;

    const ZERO_PAYMENT = 101;

    const INVALID_PAYMENT_METHOD = 2;
    const AMAZON_REJECTED = 3;
    const EXPIRED = 5;

    public static \$errorMessages = [
        self::ZERO_PAYMENT => 'Amazon Payは合計0円のお支払いに対応しておりません。',
        self::INVALID_PAYMENT_METHOD => 'Amazonアカウントでのお支払い選択において問題が発生しました。他の支払方法を選択するか、クレジットカード情報更新してください。',
        self::AMAZON_REJECTED => 'お支払い処理が失敗しました。他の支払い方法で再度購入してください。',
        self::EXPIRED => 'セッションの有効期限が切れました。',
    ];

    public static \$amazon_error_list = [
        'InvalidPaymentMethod' => self::INVALID_PAYMENT_METHOD,
        'AmazonRejected' => self::AMAZON_REJECTED,
        'BuyerCanceled' => self::AMAZON_REJECTED,
        'AmazonCanceled' => self::AMAZON_REJECTED,
        'Declined' => self::INVALID_PAYMENT_METHOD,
        'Expired' => self::EXPIRED,
    ];

    /**
     * create method.
     *
     * @param int \$error_code
     * @return AmazonPaymentException
     */
    public static function create(int \$error_code)
    {
        if (!array_key_exists(\$error_code, self::\$errorMessages)) {
            \$message = '予期しないエラーが発生しました。';
        } else {
            \$message = self::\$errorMessages[\$error_code];
        }

        return new self(\$message, \$error_code);
    }

    /**
     * エラーの理由コードを受取って、エラーコードを返す.
     * 未定義のエラーを受取った場合はfalseを返す.
     *
     * @param \$reason_code
     * @return bool|mixed
     */
    public static function getErrorCode(\$reason_code)
    {
        if (!array_key_exists(\$reason_code, self::\$amazon_error_list)) {
            return self::UNDEFINED;
        }
        return self::\$amazon_error_list[\$reason_code];
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
        return "AmazonPayV2_42_Bundle/Exception/AmazonPaymentException.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle\\Exception;

class AmazonPaymentException extends \\Exception
{
    // ErrorCodes.
    const UNDEFINED = false;

    const ZERO_PAYMENT = 101;

    const INVALID_PAYMENT_METHOD = 2;
    const AMAZON_REJECTED = 3;
    const EXPIRED = 5;

    public static \$errorMessages = [
        self::ZERO_PAYMENT => 'Amazon Payは合計0円のお支払いに対応しておりません。',
        self::INVALID_PAYMENT_METHOD => 'Amazonアカウントでのお支払い選択において問題が発生しました。他の支払方法を選択するか、クレジットカード情報更新してください。',
        self::AMAZON_REJECTED => 'お支払い処理が失敗しました。他の支払い方法で再度購入してください。',
        self::EXPIRED => 'セッションの有効期限が切れました。',
    ];

    public static \$amazon_error_list = [
        'InvalidPaymentMethod' => self::INVALID_PAYMENT_METHOD,
        'AmazonRejected' => self::AMAZON_REJECTED,
        'BuyerCanceled' => self::AMAZON_REJECTED,
        'AmazonCanceled' => self::AMAZON_REJECTED,
        'Declined' => self::INVALID_PAYMENT_METHOD,
        'Expired' => self::EXPIRED,
    ];

    /**
     * create method.
     *
     * @param int \$error_code
     * @return AmazonPaymentException
     */
    public static function create(int \$error_code)
    {
        if (!array_key_exists(\$error_code, self::\$errorMessages)) {
            \$message = '予期しないエラーが発生しました。';
        } else {
            \$message = self::\$errorMessages[\$error_code];
        }

        return new self(\$message, \$error_code);
    }

    /**
     * エラーの理由コードを受取って、エラーコードを返す.
     * 未定義のエラーを受取った場合はfalseを返す.
     *
     * @param \$reason_code
     * @return bool|mixed
     */
    public static function getErrorCode(\$reason_code)
    {
        if (!array_key_exists(\$reason_code, self::\$amazon_error_list)) {
            return self::UNDEFINED;
        }
        return self::\$amazon_error_list[\$reason_code];
    }
}
", "AmazonPayV2_42_Bundle/Exception/AmazonPaymentException.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Exception\\AmazonPaymentException.php");
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
