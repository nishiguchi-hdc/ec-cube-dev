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

/* AmazonPayV2_42_Bundle/Form/Extension/ShippingTypeExtension.php */
class __TwigTemplate_ccbbf0928db51cb06ec7a6035e3175e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/ShippingTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/ShippingTypeExtension.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Payment;
use Eccube\\Exception\\ShoppingException;
use Eccube\\Form\\Type\\Shopping\\ShippingType;
use Eccube\\Repository\\PaymentOptionRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class ShippingTypeExtension extends AbstractTypeExtension
{

    public function __construct(
        RequestStack \$requestStack,
        PaymentOptionRepository \$paymentOptionRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->requestStack = \$requestStack;
        \$this->paymentOptionRepository = \$paymentOptionRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$self = \$this;

        // 配送方法のプルダウンを生成
        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$Order */
            \$Shipping = \$event->getData();
            if (null === \$Shipping || !\$Shipping->getId()) {
                return;
            }

            \$request = \$this->requestStack->getMainRequest();

            \$referer = \$request->headers->get('referer');
            \$Order = \$Shipping->getOrder();
            \$Payment = \$Order->getPayment();
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                return;
            }

            \$uri = \$request->getUri();
            // Amazon Payフローのみ処理
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == true) {
                \$form = \$event->getForm();

                \$Deliveries = \$this->getDeliveryChoices(\$form);

                // 配送方法から、AmazonPay使用不可のものを除外
                \$Deliveries = \$this->removeNotAmazonPayChoice(\$Deliveries);

                // 除外後に配送方法が空で無ければ先頭の配送方法をセット
                if (is_null(\$Shipping->getDelivery()) && \$Delivery = current(\$Deliveries)) {
                    \$Shipping->setDelivery(\$Delivery);
                    \$Shipping->setShippingDeliveryName(\$Delivery->getName());
                }

                // 配送方法のフォームを追加
                \$this->addDeliveryForm(\$form, \$Deliveries);
            }
        });
    }

    private function getDeliveryChoices(FormInterface \$form)
    {
        return \$form->get('Delivery')->getConfig()->getAttribute('choice_list')->getChoices();
    }

    private function removeNotAmazonPayChoice(\$Deliveries)
    {
        foreach (\$Deliveries as \$key => \$Delivery) {
            \$PaymentOptions = \$Delivery->getPaymentOptions();
            \$amazonPayFlg = false;
            foreach (\$PaymentOptions as \$PaymentOption) {
                \$Payment = \$PaymentOption->getPayment();
                if (\$Payment->getMethodClass() === AmazonPay::class) {
                    \$amazonPayFlg = true;
                    break;
                }
            }

            if (!\$amazonPayFlg) {
                unset(\$Deliveries[\$key]);
            }
        }

        return \$Deliveries;
    }

    private function addDeliveryForm(FormInterface \$form, array \$choices)
    {
        \$form->add('Delivery', EntityType::class, [
            'required' => false,
            'label' => 'shipping.label.delivery_hour',
            'class' => 'Eccube\\Entity\\Delivery',
            'choice_label' => 'name',
            'choices' => \$choices,
            'placeholder' => false,
            'constraints' => [
                new NotBlank(),
            ],
        ]);
    }

    public function getExtendedType()
    {
        return ShippingType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ShippingType::class];
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
        return "AmazonPayV2_42_Bundle/Form/Extension/ShippingTypeExtension.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Payment;
use Eccube\\Exception\\ShoppingException;
use Eccube\\Form\\Type\\Shopping\\ShippingType;
use Eccube\\Repository\\PaymentOptionRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class ShippingTypeExtension extends AbstractTypeExtension
{

    public function __construct(
        RequestStack \$requestStack,
        PaymentOptionRepository \$paymentOptionRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->requestStack = \$requestStack;
        \$this->paymentOptionRepository = \$paymentOptionRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$self = \$this;

        // 配送方法のプルダウンを生成
        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$Order */
            \$Shipping = \$event->getData();
            if (null === \$Shipping || !\$Shipping->getId()) {
                return;
            }

            \$request = \$this->requestStack->getMainRequest();

            \$referer = \$request->headers->get('referer');
            \$Order = \$Shipping->getOrder();
            \$Payment = \$Order->getPayment();
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                return;
            }

            \$uri = \$request->getUri();
            // Amazon Payフローのみ処理
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == true) {
                \$form = \$event->getForm();

                \$Deliveries = \$this->getDeliveryChoices(\$form);

                // 配送方法から、AmazonPay使用不可のものを除外
                \$Deliveries = \$this->removeNotAmazonPayChoice(\$Deliveries);

                // 除外後に配送方法が空で無ければ先頭の配送方法をセット
                if (is_null(\$Shipping->getDelivery()) && \$Delivery = current(\$Deliveries)) {
                    \$Shipping->setDelivery(\$Delivery);
                    \$Shipping->setShippingDeliveryName(\$Delivery->getName());
                }

                // 配送方法のフォームを追加
                \$this->addDeliveryForm(\$form, \$Deliveries);
            }
        });
    }

    private function getDeliveryChoices(FormInterface \$form)
    {
        return \$form->get('Delivery')->getConfig()->getAttribute('choice_list')->getChoices();
    }

    private function removeNotAmazonPayChoice(\$Deliveries)
    {
        foreach (\$Deliveries as \$key => \$Delivery) {
            \$PaymentOptions = \$Delivery->getPaymentOptions();
            \$amazonPayFlg = false;
            foreach (\$PaymentOptions as \$PaymentOption) {
                \$Payment = \$PaymentOption->getPayment();
                if (\$Payment->getMethodClass() === AmazonPay::class) {
                    \$amazonPayFlg = true;
                    break;
                }
            }

            if (!\$amazonPayFlg) {
                unset(\$Deliveries[\$key]);
            }
        }

        return \$Deliveries;
    }

    private function addDeliveryForm(FormInterface \$form, array \$choices)
    {
        \$form->add('Delivery', EntityType::class, [
            'required' => false,
            'label' => 'shipping.label.delivery_hour',
            'class' => 'Eccube\\Entity\\Delivery',
            'choice_label' => 'name',
            'choices' => \$choices,
            'placeholder' => false,
            'constraints' => [
                new NotBlank(),
            ],
        ]);
    }

    public function getExtendedType()
    {
        return ShippingType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ShippingType::class];
    }
}
", "AmazonPayV2_42_Bundle/Form/Extension/ShippingTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension\\ShippingTypeExtension.php");
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
