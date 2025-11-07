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

/* AmazonPayV2_42_Bundle/Amazon/Pay/API/HttpCurl.php */
class __TwigTemplate_5749fb06d4f6a909e7918c79511c5768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Amazon/Pay/API/HttpCurl.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Amazon/Pay/API/HttpCurl.php"));

        // line 1
        echo "<?php
namespace Plugin\\AmazonPayV2_42_Bundle\\Amazon\\Pay\\API;

/* Class HttpCurl
 * Handles Curl transmission for all requests
 */

class HttpCurl
{
    const MAX_ERROR_RETRY = 3;

    private \$curlResponseInfo = null;
    private \$requestId = null;

    private function header_callback(\$ch, \$header_line)
    {
        \$headers[] = \$header_line;

        foreach(\$headers as \$part) {
            \$middle = explode(\":\", \$part, 2);
            if (isset(\$middle[1])) {
                \$key = strtolower(trim(\$middle[0]));
                if (\$key == 'x-amz-pay-request-id') {
                    \$this->requestId = trim(\$middle[1]);
                }
            }
        }

        return strlen(\$header_line);
    }

    private function commonCurlParams(\$url)
    {
     \t\$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_PORT, 443);
        curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt(\$ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_HEADER, false);
        curl_setopt(\$ch, CURLOPT_HEADERFUNCTION, array(\$this, 'header_callback'));

        return \$ch;
    }


    /* Send using curl
     */
    private function httpSend(\$method, \$url, \$payload, \$postSignedHeaders)
    {
        // Ensure we never send the \"Expect: 100-continue\" header by adding
        // an 'Expect:' header to the end of the headers
        \$postSignedHeaders[] = 'Expect:';

        \$ch = \$this->commonCurlParams(\$url);
        curl_setopt(\$ch, CURLOPT_CUSTOMREQUEST, \$method);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$payload);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$postSignedHeaders);

        \$response = \$this->execute(\$ch);
        return \$response;
    }

    /* Execute Curl request */
    private function execute(\$ch)
    {
        \$response = '';

        \$response = curl_exec(\$ch);
        if (\$response === false) {
            \$error_msg = \"Unable to send request, underlying exception of \" . curl_error(\$ch);
            curl_close(\$ch);
            throw new \\Exception(\$error_msg);
        } else {
            \$this->curlResponseInfo = curl_getinfo(\$ch);
        }
        curl_close(\$ch);
        return \$response;
    }

    /* invokeCurl takes the parameters and invokes the httpSend function to transmit the parameters
     * Exponential retries on error 429, 500, and 503
     * Function returns an array of troubleshooting data, response from the request is in ['response']
     */
    public function invokeCurl(\$method, \$url, \$payload, \$postSignedHeaders)
    {
        \$curtime = microtime(true);
        \$response = array();
        \$statusCode = 200;

        // Submit the request and read response body
        try {
            \$shouldRetry = true;
            \$retries = 0;
            do {
                try {
                    \$response = \$this->httpSend(\$method, \$url, \$payload, \$postSignedHeaders);
                    \$curlResponseInfo = \$this->curlResponseInfo;
                    \$statusCode = \$curlResponseInfo[\"http_code\"];
                    \$response = array(
                        'status'     => \$statusCode,
                        'method'     => \$method,
                        'url'        => \$url,
                        'headers'    => \$postSignedHeaders,
                        'request'    => \$payload,
                        'response'   => \$response,
                        'request_id' => \$this->requestId,
                        'retries'    => \$retries,
                        'duration'   => intval(round((microtime(true)-\$curtime) * 1000))
                    );

                    \$statusCode = \$response['status'];
                    if (\$statusCode == 200) {
                        \$shouldRetry = false;
                    } elseif (\$statusCode == 429 || \$statusCode == 500 || \$statusCode == 503) {

                        \$shouldRetry = true;
                        if (\$shouldRetry) {
                            \$this->pauseOnRetry(++\$retries, \$response);
                            if (\$retries > self::MAX_ERROR_RETRY) {
                                \$shouldRetry = false;
                            }
                        }
                    } else {
                        \$shouldRetry = false;
                    }
                } catch (\\Exception \$e) {
                    throw \$e;
                }
            } while (\$shouldRetry);
        } catch (\\Exception \$se) {
            throw \$se;
        }

        return \$response;
    }

    /* Exponential sleep on failed request
     * Up to three retries will occur if first reqest fails
     * after 1.0 second, 2.2 seconds, and finally 7.0 seconds
     * @param retries current retry
     * @throws Exception if maximum number of retries has been reached
     */
    private function pauseOnRetry(\$retries, \$response)
    {
        if (\$retries <= self::MAX_ERROR_RETRY) {
            // PHP delays are in microseconds (1 million microsecond = 1 sec)
            // 1st delay is (4^1) * 100000 + 600000 = 0.4 + 0.6 second = 1.0 sec
            // 2nd delay is (4^2) * 100000 + 600000 = 1.6 + 0.6 second = 2.2 sec
            // 3rd delay is (4^3) * 100000 + 600000 = 6.4 + 0.6 second = 7.0 sec
            \$delay = (int) (pow(4, \$retries) * 100000) + 600000;
            usleep(\$delay);
        }
    }

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
        return "AmazonPayV2_42_Bundle/Amazon/Pay/API/HttpCurl.php";
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

/* Class HttpCurl
 * Handles Curl transmission for all requests
 */

class HttpCurl
{
    const MAX_ERROR_RETRY = 3;

    private \$curlResponseInfo = null;
    private \$requestId = null;

    private function header_callback(\$ch, \$header_line)
    {
        \$headers[] = \$header_line;

        foreach(\$headers as \$part) {
            \$middle = explode(\":\", \$part, 2);
            if (isset(\$middle[1])) {
                \$key = strtolower(trim(\$middle[0]));
                if (\$key == 'x-amz-pay-request-id') {
                    \$this->requestId = trim(\$middle[1]);
                }
            }
        }

        return strlen(\$header_line);
    }

    private function commonCurlParams(\$url)
    {
     \t\$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_PORT, 443);
        curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt(\$ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_HEADER, false);
        curl_setopt(\$ch, CURLOPT_HEADERFUNCTION, array(\$this, 'header_callback'));

        return \$ch;
    }


    /* Send using curl
     */
    private function httpSend(\$method, \$url, \$payload, \$postSignedHeaders)
    {
        // Ensure we never send the \"Expect: 100-continue\" header by adding
        // an 'Expect:' header to the end of the headers
        \$postSignedHeaders[] = 'Expect:';

        \$ch = \$this->commonCurlParams(\$url);
        curl_setopt(\$ch, CURLOPT_CUSTOMREQUEST, \$method);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$payload);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$postSignedHeaders);

        \$response = \$this->execute(\$ch);
        return \$response;
    }

    /* Execute Curl request */
    private function execute(\$ch)
    {
        \$response = '';

        \$response = curl_exec(\$ch);
        if (\$response === false) {
            \$error_msg = \"Unable to send request, underlying exception of \" . curl_error(\$ch);
            curl_close(\$ch);
            throw new \\Exception(\$error_msg);
        } else {
            \$this->curlResponseInfo = curl_getinfo(\$ch);
        }
        curl_close(\$ch);
        return \$response;
    }

    /* invokeCurl takes the parameters and invokes the httpSend function to transmit the parameters
     * Exponential retries on error 429, 500, and 503
     * Function returns an array of troubleshooting data, response from the request is in ['response']
     */
    public function invokeCurl(\$method, \$url, \$payload, \$postSignedHeaders)
    {
        \$curtime = microtime(true);
        \$response = array();
        \$statusCode = 200;

        // Submit the request and read response body
        try {
            \$shouldRetry = true;
            \$retries = 0;
            do {
                try {
                    \$response = \$this->httpSend(\$method, \$url, \$payload, \$postSignedHeaders);
                    \$curlResponseInfo = \$this->curlResponseInfo;
                    \$statusCode = \$curlResponseInfo[\"http_code\"];
                    \$response = array(
                        'status'     => \$statusCode,
                        'method'     => \$method,
                        'url'        => \$url,
                        'headers'    => \$postSignedHeaders,
                        'request'    => \$payload,
                        'response'   => \$response,
                        'request_id' => \$this->requestId,
                        'retries'    => \$retries,
                        'duration'   => intval(round((microtime(true)-\$curtime) * 1000))
                    );

                    \$statusCode = \$response['status'];
                    if (\$statusCode == 200) {
                        \$shouldRetry = false;
                    } elseif (\$statusCode == 429 || \$statusCode == 500 || \$statusCode == 503) {

                        \$shouldRetry = true;
                        if (\$shouldRetry) {
                            \$this->pauseOnRetry(++\$retries, \$response);
                            if (\$retries > self::MAX_ERROR_RETRY) {
                                \$shouldRetry = false;
                            }
                        }
                    } else {
                        \$shouldRetry = false;
                    }
                } catch (\\Exception \$e) {
                    throw \$e;
                }
            } while (\$shouldRetry);
        } catch (\\Exception \$se) {
            throw \$se;
        }

        return \$response;
    }

    /* Exponential sleep on failed request
     * Up to three retries will occur if first reqest fails
     * after 1.0 second, 2.2 seconds, and finally 7.0 seconds
     * @param retries current retry
     * @throws Exception if maximum number of retries has been reached
     */
    private function pauseOnRetry(\$retries, \$response)
    {
        if (\$retries <= self::MAX_ERROR_RETRY) {
            // PHP delays are in microseconds (1 million microsecond = 1 sec)
            // 1st delay is (4^1) * 100000 + 600000 = 0.4 + 0.6 second = 1.0 sec
            // 2nd delay is (4^2) * 100000 + 600000 = 1.6 + 0.6 second = 2.2 sec
            // 3rd delay is (4^3) * 100000 + 600000 = 6.4 + 0.6 second = 7.0 sec
            \$delay = (int) (pow(4, \$retries) * 100000) + 600000;
            usleep(\$delay);
        }
    }

}

?>
", "AmazonPayV2_42_Bundle/Amazon/Pay/API/HttpCurl.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Amazon\\Pay\\API\\HttpCurl.php");
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
