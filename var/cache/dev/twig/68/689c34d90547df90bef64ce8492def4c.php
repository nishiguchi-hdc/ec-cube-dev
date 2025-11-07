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

/* AmazonPayV2_42_Bundle/phpseclib/Crypt/RC4.php */
class __TwigTemplate_2c57d7f0f345bd988064fb296bca1b71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Crypt/RC4.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Crypt/RC4.php"));

        // line 1
        echo "<?php

/**
 * Pure-PHP implementation of RC4.
 *
 * Uses mcrypt, if available, and an internal implementation, otherwise.
 *
 * PHP version 5
 *
 * Useful resources are as follows:
 *
 *  - {@link http://www.mozilla.org/projects/security/pki/nss/draft-kaukonen-cipher-arcfour-03.txt ARCFOUR Algorithm}
 *  - {@link http://en.wikipedia.org/wiki/RC4 - Wikipedia: RC4}
 *
 * RC4 is also known as ARCFOUR or ARC4.  The reason is elaborated upon at Wikipedia.  This class is named RC4 and not
 * ARCFOUR or ARC4 because RC4 is how it is referred to in the SSH1 specification.
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$rc4 = new \\phpseclib\\Crypt\\RC4();
 *
 *    \$rc4->setKey('abcdefgh');
 *
 *    \$size = 10 * 1024;
 *    \$plaintext = '';
 *    for (\$i = 0; \$i < \$size; \$i++) {
 *        \$plaintext.= 'a';
 *    }
 *
 *    echo \$rc4->decrypt(\$rc4->encrypt(\$plaintext));
 * ?>
 * </code>
 *
 * @category  Crypt
 * @package   RC4
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2007 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt;

/**
 * Pure-PHP implementation of RC4.
 *
 * @package RC4
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class RC4 extends Base
{
    /**#@+
     * @access private
     * @see \\phpseclib\\Crypt\\RC4::_crypt()
    */
    const ENCRYPT = 0;
    const DECRYPT = 1;
    /**#@-*/

    /**
     * Block Length of the cipher
     *
     * RC4 is a stream cipher
     * so we the block_size to 0
     *
     * @see \\phpseclib\\Crypt\\Base::block_size
     * @var int
     * @access private
     */
    var \$block_size = 0;

    /**
     * Key Length (in bytes)
     *
     * @see \\phpseclib\\Crypt\\RC4::setKeyLength()
     * @var int
     * @access private
     */
    var \$key_length = 128; // = 1024 bits

    /**
     * The mcrypt specific name of the cipher
     *
     * @see \\phpseclib\\Crypt\\Base::cipher_name_mcrypt
     * @var string
     * @access private
     */
    var \$cipher_name_mcrypt = 'arcfour';

    /**
     * Holds whether performance-optimized \$inline_crypt() can/should be used.
     *
     * @see \\phpseclib\\Crypt\\Base::inline_crypt
     * @var mixed
     * @access private
     */
    var \$use_inline_crypt = false; // currently not available

    /**
     * The Key
     *
     * @see self::setKey()
     * @var string
     * @access private
     */
    var \$key;

    /**
     * The Key Stream for decryption and encryption
     *
     * @see self::setKey()
     * @var array
     * @access private
     */
    var \$stream;

    /**
     * Default Constructor.
     *
     * Determines whether or not the mcrypt extension should be used.
     *
     * @see \\phpseclib\\Crypt\\Base::__construct()
     * @return \\phpseclib\\Crypt\\RC4
     * @access public
     */
    function __construct()
    {
        parent::__construct(Base::MODE_STREAM);
    }

    /**
     * Test for engine validity
     *
     * This is mainly just a wrapper to set things up for \\phpseclib\\Crypt\\Base::isValidEngine()
     *
     * @see \\phpseclib\\Crypt\\Base::__construct()
     * @param int \$engine
     * @access public
     * @return bool
     */
    function isValidEngine(\$engine)
    {
        if (\$engine == Base::ENGINE_OPENSSL) {
            if (version_compare(PHP_VERSION, '5.3.7') >= 0) {
                \$this->cipher_name_openssl = 'rc4-40';
            } else {
                switch (strlen(\$this->key)) {
                    case 5:
                        \$this->cipher_name_openssl = 'rc4-40';
                        break;
                    case 8:
                        \$this->cipher_name_openssl = 'rc4-64';
                        break;
                    case 16:
                        \$this->cipher_name_openssl = 'rc4';
                        break;
                    default:
                        return false;
                }
            }
        }

        return parent::isValidEngine(\$engine);
    }

    /**
     * Dummy function.
     *
     * Some protocols, such as WEP, prepend an \"initialization vector\" to the key, effectively creating a new key [1].
     * If you need to use an initialization vector in this manner, feel free to prepend it to the key, yourself, before
     * calling setKey().
     *
     * [1] WEP's initialization vectors (IV's) are used in a somewhat insecure way.  Since, in that protocol,
     * the IV's are relatively easy to predict, an attack described by
     * {@link http://www.drizzle.com/~aboba/IEEE/rc4_ksaproc.pdf Scott Fluhrer, Itsik Mantin, and Adi Shamir}
     * can be used to quickly guess at the rest of the key.  The following links elaborate:
     *
     * {@link http://www.rsa.com/rsalabs/node.asp?id=2009 http://www.rsa.com/rsalabs/node.asp?id=2009}
     * {@link http://en.wikipedia.org/wiki/Related_key_attack http://en.wikipedia.org/wiki/Related_key_attack}
     *
     * @param string \$iv
     * @see self::setKey()
     * @access public
     */
    function setIV(\$iv)
    {
    }

    /**
     * Sets the key length
     *
     * Keys can be between 1 and 256 bytes long.
     *
     * @access public
     * @param int \$length
     */
    function setKeyLength(\$length)
    {
        if (\$length < 8) {
            \$this->key_length = 1;
        } elseif (\$length > 2048) {
            \$this->key_length = 256;
        } else {
            \$this->key_length = \$length >> 3;
        }

        parent::setKeyLength(\$length);
    }

    /**
     * Encrypts a message.
     *
     * @see \\phpseclib\\Crypt\\Base::decrypt()
     * @see self::_crypt()
     * @access public
     * @param string \$plaintext
     * @return string \$ciphertext
     */
    function encrypt(\$plaintext)
    {
        if (\$this->engine != Base::ENGINE_INTERNAL) {
            return parent::encrypt(\$plaintext);
        }
        return \$this->_crypt(\$plaintext, self::ENCRYPT);
    }

    /**
     * Decrypts a message.
     *
     * \$this->decrypt(\$this->encrypt(\$plaintext)) == \$this->encrypt(\$this->encrypt(\$plaintext)).
     * At least if the continuous buffer is disabled.
     *
     * @see \\phpseclib\\Crypt\\Base::encrypt()
     * @see self::_crypt()
     * @access public
     * @param string \$ciphertext
     * @return string \$plaintext
     */
    function decrypt(\$ciphertext)
    {
        if (\$this->engine != Base::ENGINE_INTERNAL) {
            return parent::decrypt(\$ciphertext);
        }
        return \$this->_crypt(\$ciphertext, self::DECRYPT);
    }

    /**
     * Encrypts a block
     *
     * @access private
     * @param string \$in
     */
    function _encryptBlock(\$in)
    {
        // RC4 does not utilize this method
    }

    /**
     * Decrypts a block
     *
     * @access private
     * @param string \$in
     */
    function _decryptBlock(\$in)
    {
        // RC4 does not utilize this method
    }

    /**
     * Setup the key (expansion)
     *
     * @see \\phpseclib\\Crypt\\Base::_setupKey()
     * @access private
     */
    function _setupKey()
    {
        \$key = \$this->key;
        \$keyLength = strlen(\$key);
        \$keyStream = range(0, 255);
        \$j = 0;
        for (\$i = 0; \$i < 256; \$i++) {
            \$j = (\$j + \$keyStream[\$i] + ord(\$key[\$i % \$keyLength])) & 255;
            \$temp = \$keyStream[\$i];
            \$keyStream[\$i] = \$keyStream[\$j];
            \$keyStream[\$j] = \$temp;
        }

        \$this->stream = array();
        \$this->stream[self::DECRYPT] = \$this->stream[self::ENCRYPT] = array(
            0, // index \$i
            0, // index \$j
            \$keyStream
        );
    }

    /**
     * Encrypts or decrypts a message.
     *
     * @see self::encrypt()
     * @see self::decrypt()
     * @access private
     * @param string \$text
     * @param int \$mode
     * @return string \$text
     */
    function _crypt(\$text, \$mode)
    {
        if (\$this->changed) {
            \$this->_setup();
            \$this->changed = false;
        }

        \$stream = &\$this->stream[\$mode];
        if (\$this->continuousBuffer) {
            \$i = &\$stream[0];
            \$j = &\$stream[1];
            \$keyStream = &\$stream[2];
        } else {
            \$i = \$stream[0];
            \$j = \$stream[1];
            \$keyStream = \$stream[2];
        }

        \$len = strlen(\$text);
        for (\$k = 0; \$k < \$len; ++\$k) {
            \$i = (\$i + 1) & 255;
            \$ksi = \$keyStream[\$i];
            \$j = (\$j + \$ksi) & 255;
            \$ksj = \$keyStream[\$j];

            \$keyStream[\$i] = \$ksj;
            \$keyStream[\$j] = \$ksi;
            \$text[\$k] = \$text[\$k] ^ chr(\$keyStream[(\$ksj + \$ksi) & 255]);
        }

        return \$text;
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
        return "AmazonPayV2_42_Bundle/phpseclib/Crypt/RC4.php";
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
 * Pure-PHP implementation of RC4.
 *
 * Uses mcrypt, if available, and an internal implementation, otherwise.
 *
 * PHP version 5
 *
 * Useful resources are as follows:
 *
 *  - {@link http://www.mozilla.org/projects/security/pki/nss/draft-kaukonen-cipher-arcfour-03.txt ARCFOUR Algorithm}
 *  - {@link http://en.wikipedia.org/wiki/RC4 - Wikipedia: RC4}
 *
 * RC4 is also known as ARCFOUR or ARC4.  The reason is elaborated upon at Wikipedia.  This class is named RC4 and not
 * ARCFOUR or ARC4 because RC4 is how it is referred to in the SSH1 specification.
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$rc4 = new \\phpseclib\\Crypt\\RC4();
 *
 *    \$rc4->setKey('abcdefgh');
 *
 *    \$size = 10 * 1024;
 *    \$plaintext = '';
 *    for (\$i = 0; \$i < \$size; \$i++) {
 *        \$plaintext.= 'a';
 *    }
 *
 *    echo \$rc4->decrypt(\$rc4->encrypt(\$plaintext));
 * ?>
 * </code>
 *
 * @category  Crypt
 * @package   RC4
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2007 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt;

/**
 * Pure-PHP implementation of RC4.
 *
 * @package RC4
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class RC4 extends Base
{
    /**#@+
     * @access private
     * @see \\phpseclib\\Crypt\\RC4::_crypt()
    */
    const ENCRYPT = 0;
    const DECRYPT = 1;
    /**#@-*/

    /**
     * Block Length of the cipher
     *
     * RC4 is a stream cipher
     * so we the block_size to 0
     *
     * @see \\phpseclib\\Crypt\\Base::block_size
     * @var int
     * @access private
     */
    var \$block_size = 0;

    /**
     * Key Length (in bytes)
     *
     * @see \\phpseclib\\Crypt\\RC4::setKeyLength()
     * @var int
     * @access private
     */
    var \$key_length = 128; // = 1024 bits

    /**
     * The mcrypt specific name of the cipher
     *
     * @see \\phpseclib\\Crypt\\Base::cipher_name_mcrypt
     * @var string
     * @access private
     */
    var \$cipher_name_mcrypt = 'arcfour';

    /**
     * Holds whether performance-optimized \$inline_crypt() can/should be used.
     *
     * @see \\phpseclib\\Crypt\\Base::inline_crypt
     * @var mixed
     * @access private
     */
    var \$use_inline_crypt = false; // currently not available

    /**
     * The Key
     *
     * @see self::setKey()
     * @var string
     * @access private
     */
    var \$key;

    /**
     * The Key Stream for decryption and encryption
     *
     * @see self::setKey()
     * @var array
     * @access private
     */
    var \$stream;

    /**
     * Default Constructor.
     *
     * Determines whether or not the mcrypt extension should be used.
     *
     * @see \\phpseclib\\Crypt\\Base::__construct()
     * @return \\phpseclib\\Crypt\\RC4
     * @access public
     */
    function __construct()
    {
        parent::__construct(Base::MODE_STREAM);
    }

    /**
     * Test for engine validity
     *
     * This is mainly just a wrapper to set things up for \\phpseclib\\Crypt\\Base::isValidEngine()
     *
     * @see \\phpseclib\\Crypt\\Base::__construct()
     * @param int \$engine
     * @access public
     * @return bool
     */
    function isValidEngine(\$engine)
    {
        if (\$engine == Base::ENGINE_OPENSSL) {
            if (version_compare(PHP_VERSION, '5.3.7') >= 0) {
                \$this->cipher_name_openssl = 'rc4-40';
            } else {
                switch (strlen(\$this->key)) {
                    case 5:
                        \$this->cipher_name_openssl = 'rc4-40';
                        break;
                    case 8:
                        \$this->cipher_name_openssl = 'rc4-64';
                        break;
                    case 16:
                        \$this->cipher_name_openssl = 'rc4';
                        break;
                    default:
                        return false;
                }
            }
        }

        return parent::isValidEngine(\$engine);
    }

    /**
     * Dummy function.
     *
     * Some protocols, such as WEP, prepend an \"initialization vector\" to the key, effectively creating a new key [1].
     * If you need to use an initialization vector in this manner, feel free to prepend it to the key, yourself, before
     * calling setKey().
     *
     * [1] WEP's initialization vectors (IV's) are used in a somewhat insecure way.  Since, in that protocol,
     * the IV's are relatively easy to predict, an attack described by
     * {@link http://www.drizzle.com/~aboba/IEEE/rc4_ksaproc.pdf Scott Fluhrer, Itsik Mantin, and Adi Shamir}
     * can be used to quickly guess at the rest of the key.  The following links elaborate:
     *
     * {@link http://www.rsa.com/rsalabs/node.asp?id=2009 http://www.rsa.com/rsalabs/node.asp?id=2009}
     * {@link http://en.wikipedia.org/wiki/Related_key_attack http://en.wikipedia.org/wiki/Related_key_attack}
     *
     * @param string \$iv
     * @see self::setKey()
     * @access public
     */
    function setIV(\$iv)
    {
    }

    /**
     * Sets the key length
     *
     * Keys can be between 1 and 256 bytes long.
     *
     * @access public
     * @param int \$length
     */
    function setKeyLength(\$length)
    {
        if (\$length < 8) {
            \$this->key_length = 1;
        } elseif (\$length > 2048) {
            \$this->key_length = 256;
        } else {
            \$this->key_length = \$length >> 3;
        }

        parent::setKeyLength(\$length);
    }

    /**
     * Encrypts a message.
     *
     * @see \\phpseclib\\Crypt\\Base::decrypt()
     * @see self::_crypt()
     * @access public
     * @param string \$plaintext
     * @return string \$ciphertext
     */
    function encrypt(\$plaintext)
    {
        if (\$this->engine != Base::ENGINE_INTERNAL) {
            return parent::encrypt(\$plaintext);
        }
        return \$this->_crypt(\$plaintext, self::ENCRYPT);
    }

    /**
     * Decrypts a message.
     *
     * \$this->decrypt(\$this->encrypt(\$plaintext)) == \$this->encrypt(\$this->encrypt(\$plaintext)).
     * At least if the continuous buffer is disabled.
     *
     * @see \\phpseclib\\Crypt\\Base::encrypt()
     * @see self::_crypt()
     * @access public
     * @param string \$ciphertext
     * @return string \$plaintext
     */
    function decrypt(\$ciphertext)
    {
        if (\$this->engine != Base::ENGINE_INTERNAL) {
            return parent::decrypt(\$ciphertext);
        }
        return \$this->_crypt(\$ciphertext, self::DECRYPT);
    }

    /**
     * Encrypts a block
     *
     * @access private
     * @param string \$in
     */
    function _encryptBlock(\$in)
    {
        // RC4 does not utilize this method
    }

    /**
     * Decrypts a block
     *
     * @access private
     * @param string \$in
     */
    function _decryptBlock(\$in)
    {
        // RC4 does not utilize this method
    }

    /**
     * Setup the key (expansion)
     *
     * @see \\phpseclib\\Crypt\\Base::_setupKey()
     * @access private
     */
    function _setupKey()
    {
        \$key = \$this->key;
        \$keyLength = strlen(\$key);
        \$keyStream = range(0, 255);
        \$j = 0;
        for (\$i = 0; \$i < 256; \$i++) {
            \$j = (\$j + \$keyStream[\$i] + ord(\$key[\$i % \$keyLength])) & 255;
            \$temp = \$keyStream[\$i];
            \$keyStream[\$i] = \$keyStream[\$j];
            \$keyStream[\$j] = \$temp;
        }

        \$this->stream = array();
        \$this->stream[self::DECRYPT] = \$this->stream[self::ENCRYPT] = array(
            0, // index \$i
            0, // index \$j
            \$keyStream
        );
    }

    /**
     * Encrypts or decrypts a message.
     *
     * @see self::encrypt()
     * @see self::decrypt()
     * @access private
     * @param string \$text
     * @param int \$mode
     * @return string \$text
     */
    function _crypt(\$text, \$mode)
    {
        if (\$this->changed) {
            \$this->_setup();
            \$this->changed = false;
        }

        \$stream = &\$this->stream[\$mode];
        if (\$this->continuousBuffer) {
            \$i = &\$stream[0];
            \$j = &\$stream[1];
            \$keyStream = &\$stream[2];
        } else {
            \$i = \$stream[0];
            \$j = \$stream[1];
            \$keyStream = \$stream[2];
        }

        \$len = strlen(\$text);
        for (\$k = 0; \$k < \$len; ++\$k) {
            \$i = (\$i + 1) & 255;
            \$ksi = \$keyStream[\$i];
            \$j = (\$j + \$ksi) & 255;
            \$ksj = \$keyStream[\$j];

            \$keyStream[\$i] = \$ksj;
            \$keyStream[\$j] = \$ksi;
            \$text[\$k] = \$text[\$k] ^ chr(\$keyStream[(\$ksj + \$ksi) & 255]);
        }

        return \$text;
    }
}
", "AmazonPayV2_42_Bundle/phpseclib/Crypt/RC4.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt\\RC4.php");
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
