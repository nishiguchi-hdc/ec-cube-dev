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

/* AmazonPayV2_42_Bundle/Amazon/Pay/API/ClientInterface.php */
class __TwigTemplate_8da1ae945ab52f3cfca57ab44a7fa1c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Amazon/Pay/API/ClientInterface.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Amazon/Pay/API/ClientInterface.php"));

        // line 1
        echo "<?php
    namespace Plugin\\AmazonPayV2_42_Bundle\\Amazon\\Pay\\API;

    /* Interface class to showcase the public API methods for Amazon Pay */

    interface ClientInterface
    {

        // ----------------------------------- DELIVERY NOTIFICATIONS API -----------------------------------


        /* deliveryTrackers API call - Provides shipment tracking information for Alexa
         *
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array]
         */
        public function deliveryTrackers(\$payload, \$headers = null);


        // ----------------------------------- Amazon Checkout v2 API -----------------------------------


        /* Amazon Checkout v2 - Get Buyer
         *
         * Get Buyer details can include buyer ID, name, email address, postal code, and country code
         * when used with the Amazon.Pay.renderButton 'SignIn' productType and corresponding signInScopes.
         *
         * @param buyerToken - [String] - Buyer Token
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getBuyer(\$buyerToken, \$headers = null);


        /* Amazon Checkout v2 - Create Checkout Session
         *
         * Create a new Amazon Pay Checkout Session to customize and manage the buyer experience,
         * from when the buyer clicks the Amazon Pay button to when they complete checkout.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createCheckoutSession(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Checkout Session
         *
         * Get Checkout Session details includes buyer information, payment instrument details, and shipping address.
         * Use this operation to determine if checkout was successful after the buyer returns from the
         * AmazonPayRedirectUrl to the specified checkoutResultReturnUrl.
         *
         * @param checkoutSessionId - [String] - Checkout Session identifier
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getCheckoutSession(\$checkoutSessionId, \$headers = null);


        /* Amazon Checkout v2 - Update Checkout Session
         *
         * Update the Checkout Session with transaction details. You can keep updating the Checkout Session,
         * as long as it’s in an Open state. Once all mandatory parameters have been set, the Checkout Session object
         * will respond with an unique amazonPayRedirectUrl that you will use to redirect the buyer to complete checkout.
         *
         * @param checkoutSessionId - [String] Checkout Session identifier
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function updateCheckoutSession(\$checkoutSessionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Complete Checkout Session
         *
         * Complete Checkout Session is used to confirm completion of a Checkout Session.
         *
         * @param checkoutSessionId - [String] Checkout Session identifier
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function completeCheckoutSession(\$checkoutSessionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Get Charge Permission
         *
         * Get Charge Permission to determine if this Charge Permission can be used to charge the buyer.
         * You can also use this operation to retrieve buyer details and their shipping address after a successful checkout.
         * You can only retrieve details for 30 days from the time the Charge Permission was created.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getChargePermission(\$chargePermissionId, \$headers = null);


        /* Amazon Checkout v2 - Update Charge Permission
         *
         * Update external merchant metadata such as: buyer note, store name, and external reference ID.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function updateChargePermission(\$chargePermissionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Close Charge Permission
         *
         * Moves the Charge Permission to a Closed state. No future charges can be made and
         * pending charges will be canceled if you set cancelPendingCharges to true.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function closeChargePermission(\$chargePermissionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Create Charge
         *
         * You can create a Charge to authorize payment, if you have a Charge Permission in a Chargeable state.
         * You can optionally capture payment immediately by setting captureNow to true. The response for
         * Create Charge will include a Charge ID. This is the only time this value will ever be returned,
         * you must store the ID in order to capture payment, retrieve Charge details, or Create Refund  at a later date.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createCharge(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Charge
         *
         * Get Charge details such as charge amount and authorization state.
         * Use this operation to determine if authorization or capture was successful.
         *
         * @param chargeId - [String] - Charge identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getCharge(\$chargeId, \$headers = null);


        /* Amazon Checkout v2 - Capture Charge
         *
         * Capture payment on a Charge in the Authorized state.
         * A successful Capture will move the Charge from Authorized to Captured state.
         * The Captured state may be preceded by a temporary CaptureInitiated state if payment was captured
         * more than 7 days after authorization. See asynchronous processing for more information.
         * An unsuccessful Charge will move to a  Declined state if payment was declined.
         *
         * @param chargeId - [String] - Charge identifer
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function captureCharge(\$chargeId, \$payload, \$headers);


        /* Amazon Checkout v2 - Cancel Charge
         *
         * Moves Charge to Canceled state and releases any authorized payments.
         * You can call this operation until Capture is initiated while Charge is in an AuthorizationInitiated or Authorized state.
         *
         * @param chargeId - [String] - Charge identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function cancelCharge(\$chargeId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Create Refund
         *
         * Initiate a full or partial refund for a charge.
         * At your discretion, you can also choose to overcompensate the buyer and
         * refund more than the original Charge amount by 15% or 75 USD/GBP/EUR (whichever is less).
         * The response for Create Refund will include a Refund ID. This is the only time this value will ever be returned.
         * You must store the ID in order to retrieve Refund details at a later date.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createRefund(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Refund
         *
         * Get refund details.
         *
         * @param refundId - [String] - Refund identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getRefund(\$refundId, \$headers = null);


        // ----------------------------------- IN-STORE API -----------------------------------


        /* In-Store merchantScan API call - Generates Charge Permission ID from Amazon App's Amazon Pay QR Code
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreMerchantScan(\$payload, \$headers = null);


        /* In-Store charge API call - Performs Charge on a Charge Permission ID
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreCharge(\$payload, \$headers = null);


        /* In-Store refund API call - Peforms Refund on a Charge ID
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreRefund(\$payload, \$headers = null);


        // ----------------------------------- Signature Generation -----------------------------------

        /* generateButtonSignature convenience – Generate static signature for amazon.Pay.renderButton used by checkout.js
         * returns signature as a String
         * @param \$payload [String in JSON format]
         */
        public function generateButtonSignature(\$payload);


        /* getPostSignedHeaders convenience – Takes values for canonical request, creates a signature and
         * returns an array of headers to be sent
         * @param \$http_request_method [String]
         * @param \$request_uri [String]
         * @param \$request_parameters [Array()]
         * @param \$request_payload [String]
         */
        public function getPostSignedHeaders(\$http_request_method, \$request_uri, \$request_parameters, \$request_payload);


        /* createSignature convenience – Takes values for canonical request sorts and parses it and
         * returns a signature for the request being sent
         * @param \$http_request_method [String]
         * @param \$request_uri [String]
         * @param \$request_parameters [Array()]
         * @param \$pre_signed_headers [Array()]
         * @param \$request_payload [String]
         * @param \$timeStamp [String]
         */
        public function createSignature(\$http_request_method, \$request_uri, \$request_parameters, \$pre_signed_headers, \$request_payload, \$timeStamp);


        // ----------------------------------- Generic API calls -----------------------------------


        /* Signs and executes REST API call for arbitrary calls to Amazon Pay API Gateway
         *
         * @param method - [String] one of 'POST', 'GET', 'PATCH', 'DELETE'
         * @param urlFragment - [String] (e.g. 'v999/deliveryTrackers')
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function apiCall(\$method, \$urlFragment, \$payload, \$headers = null);

    }
?>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Amazon/Pay/API/ClientInterface.php";
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
    namespace Plugin\\AmazonPayV2_42_Bundle\\Amazon\\Pay\\API;

    /* Interface class to showcase the public API methods for Amazon Pay */

    interface ClientInterface
    {

        // ----------------------------------- DELIVERY NOTIFICATIONS API -----------------------------------


        /* deliveryTrackers API call - Provides shipment tracking information for Alexa
         *
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array]
         */
        public function deliveryTrackers(\$payload, \$headers = null);


        // ----------------------------------- Amazon Checkout v2 API -----------------------------------


        /* Amazon Checkout v2 - Get Buyer
         *
         * Get Buyer details can include buyer ID, name, email address, postal code, and country code
         * when used with the Amazon.Pay.renderButton 'SignIn' productType and corresponding signInScopes.
         *
         * @param buyerToken - [String] - Buyer Token
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getBuyer(\$buyerToken, \$headers = null);


        /* Amazon Checkout v2 - Create Checkout Session
         *
         * Create a new Amazon Pay Checkout Session to customize and manage the buyer experience,
         * from when the buyer clicks the Amazon Pay button to when they complete checkout.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createCheckoutSession(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Checkout Session
         *
         * Get Checkout Session details includes buyer information, payment instrument details, and shipping address.
         * Use this operation to determine if checkout was successful after the buyer returns from the
         * AmazonPayRedirectUrl to the specified checkoutResultReturnUrl.
         *
         * @param checkoutSessionId - [String] - Checkout Session identifier
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getCheckoutSession(\$checkoutSessionId, \$headers = null);


        /* Amazon Checkout v2 - Update Checkout Session
         *
         * Update the Checkout Session with transaction details. You can keep updating the Checkout Session,
         * as long as it’s in an Open state. Once all mandatory parameters have been set, the Checkout Session object
         * will respond with an unique amazonPayRedirectUrl that you will use to redirect the buyer to complete checkout.
         *
         * @param checkoutSessionId - [String] Checkout Session identifier
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function updateCheckoutSession(\$checkoutSessionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Complete Checkout Session
         *
         * Complete Checkout Session is used to confirm completion of a Checkout Session.
         *
         * @param checkoutSessionId - [String] Checkout Session identifier
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function completeCheckoutSession(\$checkoutSessionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Get Charge Permission
         *
         * Get Charge Permission to determine if this Charge Permission can be used to charge the buyer.
         * You can also use this operation to retrieve buyer details and their shipping address after a successful checkout.
         * You can only retrieve details for 30 days from the time the Charge Permission was created.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getChargePermission(\$chargePermissionId, \$headers = null);


        /* Amazon Checkout v2 - Update Charge Permission
         *
         * Update external merchant metadata such as: buyer note, store name, and external reference ID.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function updateChargePermission(\$chargePermissionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Close Charge Permission
         *
         * Moves the Charge Permission to a Closed state. No future charges can be made and
         * pending charges will be canceled if you set cancelPendingCharges to true.
         *
         * @param chargePermissionId - [String] - Charge Permission identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function closeChargePermission(\$chargePermissionId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Create Charge
         *
         * You can create a Charge to authorize payment, if you have a Charge Permission in a Chargeable state.
         * You can optionally capture payment immediately by setting captureNow to true. The response for
         * Create Charge will include a Charge ID. This is the only time this value will ever be returned,
         * you must store the ID in order to capture payment, retrieve Charge details, or Create Refund  at a later date.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createCharge(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Charge
         *
         * Get Charge details such as charge amount and authorization state.
         * Use this operation to determine if authorization or capture was successful.
         *
         * @param chargeId - [String] - Charge identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getCharge(\$chargeId, \$headers = null);


        /* Amazon Checkout v2 - Capture Charge
         *
         * Capture payment on a Charge in the Authorized state.
         * A successful Capture will move the Charge from Authorized to Captured state.
         * The Captured state may be preceded by a temporary CaptureInitiated state if payment was captured
         * more than 7 days after authorization. See asynchronous processing for more information.
         * An unsuccessful Charge will move to a  Declined state if payment was declined.
         *
         * @param chargeId - [String] - Charge identifer
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function captureCharge(\$chargeId, \$payload, \$headers);


        /* Amazon Checkout v2 - Cancel Charge
         *
         * Moves Charge to Canceled state and releases any authorized payments.
         * You can call this operation until Capture is initiated while Charge is in an AuthorizationInitiated or Authorized state.
         *
         * @param chargeId - [String] - Charge identifer
         * @param payload - [String in JSON format] or [array]
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function cancelCharge(\$chargeId, \$payload, \$headers = null);


        /* Amazon Checkout v2 - Create Refund
         *
         * Initiate a full or partial refund for a charge.
         * At your discretion, you can also choose to overcompensate the buyer and
         * refund more than the original Charge amount by 15% or 75 USD/GBP/EUR (whichever is less).
         * The response for Create Refund will include a Refund ID. This is the only time this value will ever be returned.
         * You must store the ID in order to retrieve Refund details at a later date.
         *
         * @param payload - [String in JSON format] or [array]
         * @param headers - [array] - requires x-amz-pay-Idempotency-Key header; optional x-amz-pay-authtoken
         */
        public function createRefund(\$payload, \$headers);


        /* Amazon Checkout v2 - Get Refund
         *
         * Get refund details.
         *
         * @param refundId - [String] - Refund identifer
         * @optional headers - [array] - optional x-amz-pay-authtoken
         */
        public function getRefund(\$refundId, \$headers = null);


        // ----------------------------------- IN-STORE API -----------------------------------


        /* In-Store merchantScan API call - Generates Charge Permission ID from Amazon App's Amazon Pay QR Code
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreMerchantScan(\$payload, \$headers = null);


        /* In-Store charge API call - Performs Charge on a Charge Permission ID
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreCharge(\$payload, \$headers = null);


        /* In-Store refund API call - Peforms Refund on a Charge ID
         *
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function instoreRefund(\$payload, \$headers = null);


        // ----------------------------------- Signature Generation -----------------------------------

        /* generateButtonSignature convenience – Generate static signature for amazon.Pay.renderButton used by checkout.js
         * returns signature as a String
         * @param \$payload [String in JSON format]
         */
        public function generateButtonSignature(\$payload);


        /* getPostSignedHeaders convenience – Takes values for canonical request, creates a signature and
         * returns an array of headers to be sent
         * @param \$http_request_method [String]
         * @param \$request_uri [String]
         * @param \$request_parameters [Array()]
         * @param \$request_payload [String]
         */
        public function getPostSignedHeaders(\$http_request_method, \$request_uri, \$request_parameters, \$request_payload);


        /* createSignature convenience – Takes values for canonical request sorts and parses it and
         * returns a signature for the request being sent
         * @param \$http_request_method [String]
         * @param \$request_uri [String]
         * @param \$request_parameters [Array()]
         * @param \$pre_signed_headers [Array()]
         * @param \$request_payload [String]
         * @param \$timeStamp [String]
         */
        public function createSignature(\$http_request_method, \$request_uri, \$request_parameters, \$pre_signed_headers, \$request_payload, \$timeStamp);


        // ----------------------------------- Generic API calls -----------------------------------


        /* Signs and executes REST API call for arbitrary calls to Amazon Pay API Gateway
         *
         * @param method - [String] one of 'POST', 'GET', 'PATCH', 'DELETE'
         * @param urlFragment - [String] (e.g. 'v999/deliveryTrackers')
         * @param payload - [String in JSON format] or [multi-dimension array with key and values]
         * @optional headers - [indexed array of string key-value pairs]
         */
        public function apiCall(\$method, \$urlFragment, \$payload, \$headers = null);

    }
?>
", "AmazonPayV2_42_Bundle/Amazon/Pay/API/ClientInterface.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Amazon\\Pay\\API\\ClientInterface.php");
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
