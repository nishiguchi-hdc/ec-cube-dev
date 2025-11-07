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

/* EccubePaymentLite42/Service/GmoEpsilonRequestService.php */
class __TwigTemplate_4080b3dc513c692e99346a0bcb4315e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequestService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequestService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Common\\EccubeConfig;
use GuzzleHttp\\Client;
use GuzzleHttp\\Exception\\BadResponseException;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class GmoEpsilonRequestService
{
    /**
     * @var eccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var Config
     */
    protected \$Config;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        ConfigRepository \$configRepository
    ) {
        \$this->eccubeConfig = \$eccubeConfig;

        \$this->Config = \$configRepository->get();
    }

    /**
     * リクエストを送信
     *
     * @return array or boolean
     */
    public function sendData(\$url, \$arrParameter, \$version = null)
    {
        //CGIバージョンが1の場合は、パラメータの文字コードをUTF8⇒EUCJPに変換
        if (isset(\$arrParameter['version']) && \$arrParameter['version'] === '1') {
            mb_convert_variables('SJIS-win', 'UTF-8', \$arrParameter);
        }
        \$client = new Client();
        try {
            \$response = \$client->post(\$url, [
                            'form_params' => \$arrParameter,
                        ]);
        } catch (\\RuntimeException \$e) {
            logs('gmo_epsilon')->info('CurlException. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return \$e->getErrorNo();
        } catch (BadResponseException \$e) {
            logs('gmo_epsilon')->info('BadResponseException. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return false;
        } catch (\\Exception \$e) {
            logs('gmo_epsilon')->info('Exception. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return false;
        }

        \$response = \$response->getBody(true);

        if (is_null(\$response)) {
            // \$msg = 'レスポンスデータエラー: レスポンスがありません。';
            return false;
        }

        // Shift-JISをUNICODEに変換する
        \$response = str_replace('x-sjis-cp932', 'UTF-8', \$response);

        // XMLパーサを生成する。
        \$parser = xml_parser_create('utf-8');

        // 空白文字は読み飛ばしてXMLを読み取る
        xml_parser_set_option(\$parser, XML_OPTION_TARGET_ENCODING, 'UTF-8');
        xml_parser_set_option(\$parser, XML_OPTION_SKIP_WHITE, 1);

        // 配列にXMLのデータを格納する
        \$arrVal = [];
        \$err = xml_parse_into_struct(\$parser, \$response, \$arrVal, \$idx);

        // 開放する
        xml_parser_free(\$parser);

        return \$arrVal;
    }

    /**
     * XMLのタグを指定し、要素を取得
     *
     * @param array \$arrVal
     * @param string \$tag
     * @param string \$att
     *
     * @return string
     */
    public function getXMLValue(\$arrVal, \$tag, \$att)
    {
        \$ret = '';
        foreach ((array) \$arrVal as \$array) {
            if (\$tag == \$array['tag']) {
                if (!is_array(\$array['attributes'])) {
                    continue;
                }
                foreach (\$array['attributes'] as \$key => \$val) {
                    if (\$key == \$att) {
                        \$ret = mb_convert_encoding(urldecode(\$val), 'UTF-8', 'SJIS');
                        break;
                    }
                }
            }
        }

        return \$ret;
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequestService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Common\\EccubeConfig;
use GuzzleHttp\\Client;
use GuzzleHttp\\Exception\\BadResponseException;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class GmoEpsilonRequestService
{
    /**
     * @var eccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var Config
     */
    protected \$Config;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        ConfigRepository \$configRepository
    ) {
        \$this->eccubeConfig = \$eccubeConfig;

        \$this->Config = \$configRepository->get();
    }

    /**
     * リクエストを送信
     *
     * @return array or boolean
     */
    public function sendData(\$url, \$arrParameter, \$version = null)
    {
        //CGIバージョンが1の場合は、パラメータの文字コードをUTF8⇒EUCJPに変換
        if (isset(\$arrParameter['version']) && \$arrParameter['version'] === '1') {
            mb_convert_variables('SJIS-win', 'UTF-8', \$arrParameter);
        }
        \$client = new Client();
        try {
            \$response = \$client->post(\$url, [
                            'form_params' => \$arrParameter,
                        ]);
        } catch (\\RuntimeException \$e) {
            logs('gmo_epsilon')->info('CurlException. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return \$e->getErrorNo();
        } catch (BadResponseException \$e) {
            logs('gmo_epsilon')->info('BadResponseException. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return false;
        } catch (\\Exception \$e) {
            logs('gmo_epsilon')->info('Exception. url='.\$url.' parameter='.print_r(\$arrParameter, true));

            return false;
        }

        \$response = \$response->getBody(true);

        if (is_null(\$response)) {
            // \$msg = 'レスポンスデータエラー: レスポンスがありません。';
            return false;
        }

        // Shift-JISをUNICODEに変換する
        \$response = str_replace('x-sjis-cp932', 'UTF-8', \$response);

        // XMLパーサを生成する。
        \$parser = xml_parser_create('utf-8');

        // 空白文字は読み飛ばしてXMLを読み取る
        xml_parser_set_option(\$parser, XML_OPTION_TARGET_ENCODING, 'UTF-8');
        xml_parser_set_option(\$parser, XML_OPTION_SKIP_WHITE, 1);

        // 配列にXMLのデータを格納する
        \$arrVal = [];
        \$err = xml_parse_into_struct(\$parser, \$response, \$arrVal, \$idx);

        // 開放する
        xml_parser_free(\$parser);

        return \$arrVal;
    }

    /**
     * XMLのタグを指定し、要素を取得
     *
     * @param array \$arrVal
     * @param string \$tag
     * @param string \$att
     *
     * @return string
     */
    public function getXMLValue(\$arrVal, \$tag, \$att)
    {
        \$ret = '';
        foreach ((array) \$arrVal as \$array) {
            if (\$tag == \$array['tag']) {
                if (!is_array(\$array['attributes'])) {
                    continue;
                }
                foreach (\$array['attributes'] as \$key => \$val) {
                    if (\$key == \$att) {
                        \$ret = mb_convert_encoding(urldecode(\$val), 'UTF-8', 'SJIS');
                        break;
                    }
                }
            }
        }

        return \$ret;
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequestService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService.php");
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
