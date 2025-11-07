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

/* AmazonPayV2_42_Bundle/phpseclib/Crypt/AES.php */
class __TwigTemplate_7103486d9abeada5e5866325f2042787 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Crypt/AES.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Crypt/AES.php"));

        // line 1
        echo "<?php

/**
 * Pure-PHP implementation of AES.
 *
 * Uses mcrypt, if available/possible, and an internal implementation, otherwise.
 *
 * PHP version 5
 *
 * NOTE: Since AES.php is (for compatibility and phpseclib-historical reasons) virtually
 * just a wrapper to Rijndael.php you may consider using Rijndael.php instead of
 * to save one include_once().
 *
 * If {@link self::setKeyLength() setKeyLength()} isn't called, it'll be calculated from
 * {@link self::setKey() setKey()}.  ie. if the key is 128-bits, the key length will be 128-bits.  If it's 136-bits
 * it'll be null-padded to 192-bits and 192 bits will be the key length until {@link self::setKey() setKey()}
 * is called, again, at which point, it'll be recalculated.
 *
 * Since \\phpseclib\\Crypt\\AES extends \\phpseclib\\Crypt\\Rijndael, some functions are available to be called that, in the context of AES, don't
 * make a whole lot of sense.  {@link self::setBlockLength() setBlockLength()}, for instance.  Calling that function,
 * however possible, won't do anything (AES has a fixed block length whereas Rijndael has a variable one).
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$aes = new \\phpseclib\\Crypt\\AES();
 *
 *    \$aes->setKey('abcdefghijklmnop');
 *
 *    \$size = 10 * 1024;
 *    \$plaintext = '';
 *    for (\$i = 0; \$i < \$size; \$i++) {
 *        \$plaintext.= 'a';
 *    }
 *
 *    echo \$aes->decrypt(\$aes->encrypt(\$plaintext));
 * ?>
 * </code>
 *
 * @category  Crypt
 * @package   AES
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2008 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt;

/**
 * Pure-PHP implementation of AES.
 *
 * @package AES
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class AES extends Rijndael
{
    /**
     * Dummy function
     *
     * Since \\phpseclib\\Crypt\\AES extends \\phpseclib\\Crypt\\Rijndael, this function is, technically, available, but it doesn't do anything.
     *
     * @see \\phpseclib\\Crypt\\Rijndael::setBlockLength()
     * @access public
     * @param int \$length
     */
    function setBlockLength(\$length)
    {
        return;
    }

    /**
     * Sets the key length
     *
     * Valid key lengths are 128, 192, and 256.  If the length is less than 128, it will be rounded up to
     * 128.  If the length is greater than 128 and invalid, it will be rounded down to the closest valid amount.
     *
     * @see \\phpseclib\\Crypt\\Rijndael:setKeyLength()
     * @access public
     * @param int \$length
     */
    function setKeyLength(\$length)
    {
        switch (\$length) {
            case 160:
                \$length = 192;
                break;
            case 224:
                \$length = 256;
        }
        parent::setKeyLength(\$length);
    }

    /**
     * Sets the key.
     *
     * Rijndael supports five different key lengths, AES only supports three.
     *
     * @see \\phpseclib\\Crypt\\Rijndael:setKey()
     * @see setKeyLength()
     * @access public
     * @param string \$key
     */
    function setKey(\$key)
    {
        parent::setKey(\$key);

        if (!\$this->explicit_key_length) {
            \$length = strlen(\$key);
            switch (true) {
                case \$length <= 16:
                    \$this->key_length = 16;
                    break;
                case \$length <= 24:
                    \$this->key_length = 24;
                    break;
                default:
                    \$this->key_length = 32;
            }
            \$this->_setEngine();
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
        return "AmazonPayV2_42_Bundle/phpseclib/Crypt/AES.php";
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

/**
 * Pure-PHP implementation of AES.
 *
 * Uses mcrypt, if available/possible, and an internal implementation, otherwise.
 *
 * PHP version 5
 *
 * NOTE: Since AES.php is (for compatibility and phpseclib-historical reasons) virtually
 * just a wrapper to Rijndael.php you may consider using Rijndael.php instead of
 * to save one include_once().
 *
 * If {@link self::setKeyLength() setKeyLength()} isn't called, it'll be calculated from
 * {@link self::setKey() setKey()}.  ie. if the key is 128-bits, the key length will be 128-bits.  If it's 136-bits
 * it'll be null-padded to 192-bits and 192 bits will be the key length until {@link self::setKey() setKey()}
 * is called, again, at which point, it'll be recalculated.
 *
 * Since \\phpseclib\\Crypt\\AES extends \\phpseclib\\Crypt\\Rijndael, some functions are available to be called that, in the context of AES, don't
 * make a whole lot of sense.  {@link self::setBlockLength() setBlockLength()}, for instance.  Calling that function,
 * however possible, won't do anything (AES has a fixed block length whereas Rijndael has a variable one).
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$aes = new \\phpseclib\\Crypt\\AES();
 *
 *    \$aes->setKey('abcdefghijklmnop');
 *
 *    \$size = 10 * 1024;
 *    \$plaintext = '';
 *    for (\$i = 0; \$i < \$size; \$i++) {
 *        \$plaintext.= 'a';
 *    }
 *
 *    echo \$aes->decrypt(\$aes->encrypt(\$plaintext));
 * ?>
 * </code>
 *
 * @category  Crypt
 * @package   AES
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2008 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt;

/**
 * Pure-PHP implementation of AES.
 *
 * @package AES
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class AES extends Rijndael
{
    /**
     * Dummy function
     *
     * Since \\phpseclib\\Crypt\\AES extends \\phpseclib\\Crypt\\Rijndael, this function is, technically, available, but it doesn't do anything.
     *
     * @see \\phpseclib\\Crypt\\Rijndael::setBlockLength()
     * @access public
     * @param int \$length
     */
    function setBlockLength(\$length)
    {
        return;
    }

    /**
     * Sets the key length
     *
     * Valid key lengths are 128, 192, and 256.  If the length is less than 128, it will be rounded up to
     * 128.  If the length is greater than 128 and invalid, it will be rounded down to the closest valid amount.
     *
     * @see \\phpseclib\\Crypt\\Rijndael:setKeyLength()
     * @access public
     * @param int \$length
     */
    function setKeyLength(\$length)
    {
        switch (\$length) {
            case 160:
                \$length = 192;
                break;
            case 224:
                \$length = 256;
        }
        parent::setKeyLength(\$length);
    }

    /**
     * Sets the key.
     *
     * Rijndael supports five different key lengths, AES only supports three.
     *
     * @see \\phpseclib\\Crypt\\Rijndael:setKey()
     * @see setKeyLength()
     * @access public
     * @param string \$key
     */
    function setKey(\$key)
    {
        parent::setKey(\$key);

        if (!\$this->explicit_key_length) {
            \$length = strlen(\$key);
            switch (true) {
                case \$length <= 16:
                    \$this->key_length = 16;
                    break;
                case \$length <= 24:
                    \$this->key_length = 24;
                    break;
                default:
                    \$this->key_length = 32;
            }
            \$this->_setEngine();
        }
    }
}
", "AmazonPayV2_42_Bundle/phpseclib/Crypt/AES.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt\\AES.php");
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
