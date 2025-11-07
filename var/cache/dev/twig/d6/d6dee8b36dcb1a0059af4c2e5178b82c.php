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

/* AmazonPayV2_42_Bundle/Form/Extension/OrderTypeExtension.php */
class __TwigTemplate_ce137e0a9a516d1b0841cf59128ae542 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/OrderTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/OrderTypeExtension.php"));

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

use Eccube\\Entity\\Payment;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class OrderTypeExtension extends AbstractTypeExtension
{

    public function __construct(
        RequestStack \$requestStack
    ) {
        \$this->requestStack = \$requestStack;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // ShoppingController::checkoutから呼ばれる場合は, フォーム項目の定義をスキップする.
        if (\$options['skip_add_form']) {
            return;
        }
        \$self = \$this;

        // 支払い方法のプルダウンを生成
        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$Order */
            \$Order = \$event->getData();
            if (null === \$Order || !\$Order->getId()) {
                return;
            }

            \$request = \$this->requestStack->getMainRequest();
            
            \$referer = \$request->headers->get('referer');
            \$Payment = \$Order->getPayment();
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                return;
            }

            \$uri = \$request->getUri();
            // Amazon決済以外はAmazonPayを支払い方法から除外
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
                \$form = \$event->getForm();

                \$Payments = \$this->getPaymentChoices(\$form);

                // 支払い方法からAmazonPayを除外
                \$Payments = \$this->removeAmazonPayChoice(\$Payments);

                // 除外後に支払い方法が空で無ければ先頭の支払い方法をセット
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class) && \$Payment = current(\$Payments)) {
                    \$Order->setPayment(\$Payment);
                    \$Order->setPaymentMethod(\$Payment->getMethod());
                    \$Order->setCharge(\$Payment->getCharge());
                }

                // 支払い方法のフォームを追加
                \$this->addPaymentForm(\$form, \$Payments, \$Order->getPayment());
            }
        });

        // 支払い方法のプルダウンを生成(Submit時)
        // 配送方法の選択によって使用できる支払い方法がかわるため, フォームを再生成する.
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) use (\$self) {
            \$request = \$this->requestStack->getMainRequest();
            \$uri = \$request->getUri();

            // Amazon決済以外はAmazonPayを支払い方法から除外
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
                \$form = \$event->getForm();
                \$Order = \$form->getData();

                \$Payments = \$this->getPaymentChoices(\$form);

                // 支払い方法からAmazonPayを除外
                \$Payments = \$this->removeAmazonPayChoice(\$Payments);

                // 支払い方法が空で無ければセット
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class) && \$Payment = current(\$Payments)) {
                    \$Order->setPayment(\$Payment);
                    \$Order->setPaymentMethod(\$Payment->getMethod());
                    \$Order->setCharge(\$Payment->getCharge());

                    // 選択状態を記憶
                    \$data = \$event->getData();
                    \$data['Payment'] = \$Payment->getId();
                    \$event->setData(\$data);
                }

                \$this->addPaymentForm(\$form, \$Payments);
            } else {
                //URLがAmazon Payとマッチしている場合
                \$form = \$event->getForm();
                \$Order = \$form->getData();

                \$Payments = \$this->getPaymentChoices(\$form);
                // OrderではAmazon Payが選択されているのにフォームの選択状態が解除された場合
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class)) {
                    \$data = \$event->getData();
                    foreach (\$Payments as \$key => \$Payment) {
                        // 支払方法にAmazon Payが存在する場合セット
                        if (!isset(\$data['Payment']) && \$Payment->getMethodClass() === AmazonPay::class) {
                            \$data['Payment'] = \$Payment->getId();
                            \$event->setData(\$data);
                        }
                    }
                }
            }
        });
    }

    private function getPaymentChoices(FormInterface \$form)
    {
        return \$form->get('Payment')->getConfig()->getAttribute('choice_list')->getChoices();
    }

    /**
     * 支払い方法からAmazonPayの選択肢を除外
     *
     * @param FormInterface \$form フォーム情報
     * @return array Payment配列
     */
    private function removeAmazonPayChoice(\$Payments)
    {
        foreach (\$Payments as \$key => \$Payment) {
            if (\$Payment->getMethodClass() === AmazonPay::class) {
                unset(\$Payments[\$key]);
            }
        }

        return \$Payments;
    }

    private function addPaymentForm(FormInterface \$form, array \$choices, Payment \$data = null)
    {
        \$message = trans('front.shopping.payment_method_unselected');
        if (empty(\$choices)) {
            \$message = trans('front.shopping.payment_method_not_fount');
        }
        \$form->add('Payment', EntityType::class, [
            'class' => Payment::class,
            'choice_label' => 'method',
            'expanded' => true,
            'multiple' => false,
            'placeholder' => false,
            'constraints' => [
                new NotBlank(['message' => \$message]),
            ],
            'choices' => \$choices,
            'data' => \$data,
            'invalid_message' => \$message,
        ]);
    }

    public function getExtendedType()
    {
        return OrderType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
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
        return "AmazonPayV2_42_Bundle/Form/Extension/OrderTypeExtension.php";
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

use Eccube\\Entity\\Payment;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class OrderTypeExtension extends AbstractTypeExtension
{

    public function __construct(
        RequestStack \$requestStack
    ) {
        \$this->requestStack = \$requestStack;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // ShoppingController::checkoutから呼ばれる場合は, フォーム項目の定義をスキップする.
        if (\$options['skip_add_form']) {
            return;
        }
        \$self = \$this;

        // 支払い方法のプルダウンを生成
        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$Order */
            \$Order = \$event->getData();
            if (null === \$Order || !\$Order->getId()) {
                return;
            }

            \$request = \$this->requestStack->getMainRequest();
            
            \$referer = \$request->headers->get('referer');
            \$Payment = \$Order->getPayment();
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                return;
            }

            \$uri = \$request->getUri();
            // Amazon決済以外はAmazonPayを支払い方法から除外
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
                \$form = \$event->getForm();

                \$Payments = \$this->getPaymentChoices(\$form);

                // 支払い方法からAmazonPayを除外
                \$Payments = \$this->removeAmazonPayChoice(\$Payments);

                // 除外後に支払い方法が空で無ければ先頭の支払い方法をセット
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class) && \$Payment = current(\$Payments)) {
                    \$Order->setPayment(\$Payment);
                    \$Order->setPaymentMethod(\$Payment->getMethod());
                    \$Order->setCharge(\$Payment->getCharge());
                }

                // 支払い方法のフォームを追加
                \$this->addPaymentForm(\$form, \$Payments, \$Order->getPayment());
            }
        });

        // 支払い方法のプルダウンを生成(Submit時)
        // 配送方法の選択によって使用できる支払い方法がかわるため, フォームを再生成する.
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) use (\$self) {
            \$request = \$this->requestStack->getMainRequest();
            \$uri = \$request->getUri();

            // Amazon決済以外はAmazonPayを支払い方法から除外
            if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
                \$form = \$event->getForm();
                \$Order = \$form->getData();

                \$Payments = \$this->getPaymentChoices(\$form);

                // 支払い方法からAmazonPayを除外
                \$Payments = \$this->removeAmazonPayChoice(\$Payments);

                // 支払い方法が空で無ければセット
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class) && \$Payment = current(\$Payments)) {
                    \$Order->setPayment(\$Payment);
                    \$Order->setPaymentMethod(\$Payment->getMethod());
                    \$Order->setCharge(\$Payment->getCharge());

                    // 選択状態を記憶
                    \$data = \$event->getData();
                    \$data['Payment'] = \$Payment->getId();
                    \$event->setData(\$data);
                }

                \$this->addPaymentForm(\$form, \$Payments);
            } else {
                //URLがAmazon Payとマッチしている場合
                \$form = \$event->getForm();
                \$Order = \$form->getData();

                \$Payments = \$this->getPaymentChoices(\$form);
                // OrderではAmazon Payが選択されているのにフォームの選択状態が解除された場合
                if ((is_null(\$Order->getPayment()) || \$Order->getPayment()->getMethodClass() === AmazonPay::class)) {
                    \$data = \$event->getData();
                    foreach (\$Payments as \$key => \$Payment) {
                        // 支払方法にAmazon Payが存在する場合セット
                        if (!isset(\$data['Payment']) && \$Payment->getMethodClass() === AmazonPay::class) {
                            \$data['Payment'] = \$Payment->getId();
                            \$event->setData(\$data);
                        }
                    }
                }
            }
        });
    }

    private function getPaymentChoices(FormInterface \$form)
    {
        return \$form->get('Payment')->getConfig()->getAttribute('choice_list')->getChoices();
    }

    /**
     * 支払い方法からAmazonPayの選択肢を除外
     *
     * @param FormInterface \$form フォーム情報
     * @return array Payment配列
     */
    private function removeAmazonPayChoice(\$Payments)
    {
        foreach (\$Payments as \$key => \$Payment) {
            if (\$Payment->getMethodClass() === AmazonPay::class) {
                unset(\$Payments[\$key]);
            }
        }

        return \$Payments;
    }

    private function addPaymentForm(FormInterface \$form, array \$choices, Payment \$data = null)
    {
        \$message = trans('front.shopping.payment_method_unselected');
        if (empty(\$choices)) {
            \$message = trans('front.shopping.payment_method_not_fount');
        }
        \$form->add('Payment', EntityType::class, [
            'class' => Payment::class,
            'choice_label' => 'method',
            'expanded' => true,
            'multiple' => false,
            'placeholder' => false,
            'constraints' => [
                new NotBlank(['message' => \$message]),
            ],
            'choices' => \$choices,
            'data' => \$data,
            'invalid_message' => \$message,
        ]);
    }

    public function getExtendedType()
    {
        return OrderType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }
}
", "AmazonPayV2_42_Bundle/Form/Extension/OrderTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension\\OrderTypeExtension.php");
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
