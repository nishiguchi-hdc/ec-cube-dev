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

/* AmazonPayV2_42_Bundle/phpseclib/Net/SCP.php */
class __TwigTemplate_ef0286ecfb1d0e97544a1b52fd7186d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Net/SCP.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/phpseclib/Net/SCP.php"));

        // line 1
        echo "<?php

/**
 * Pure-PHP implementation of SCP.
 *
 * PHP version 5
 *
 * The API for this library is modeled after the API from PHP's {@link http://php.net/book.ftp FTP extension}.
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$ssh = new \\phpseclib\\Net\\SSH2('www.domain.tld');
 *    if (!\$ssh->login('username', 'password')) {
 *        exit('bad login');
 *    }
 *    \$scp = new \\phpseclib\\Net\\SCP(\$ssh);
 *
 *    \$scp->put('abcd', str_repeat('x', 1024*1024));
 * ?>
 * </code>
 *
 * @category  Net
 * @package   SCP
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2010 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Net;

/**
 * Pure-PHP implementations of SCP.
 *
 * @package SCP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class SCP
{
    /**#@+
     * @access public
     * @see \\phpseclib\\Net\\SCP::put()
     */
    /**
     * Reads data from a local file.
     */
    const SOURCE_LOCAL_FILE = 1;
    /**
     * Reads data from a string.
     */
    const SOURCE_STRING = 2;
    /**#@-*/

    /**#@+
     * @access private
     * @see \\phpseclib\\Net\\SCP::_send()
     * @see \\phpseclib\\Net\\SCP::_receive()
    */
    /**
     * SSH1 is being used.
     */
    const MODE_SSH1 = 1;
    /**
     * SSH2 is being used.
     */
    const MODE_SSH2 =  2;
    /**#@-*/

    /**
     * SSH Object
     *
     * @var object
     * @access private
     */
    var \$ssh;

    /**
     * Packet Size
     *
     * @var int
     * @access private
     */
    var \$packet_size;

    /**
     * Mode
     *
     * @var int
     * @access private
     */
    var \$mode;

    /**
     * Default Constructor.
     *
     * Connects to an SSH server
     *
     * @param \\phpseclib\\Net\\SSH1|\\phpseclib\\Net\\SSH2 \$ssh
     * @return \\phpseclib\\Net\\SCP
     * @access public
     */
    function __construct(\$ssh)
    {
        if (\$ssh instanceof SSH2) {
            \$this->mode = self::MODE_SSH2;
        } elseif (\$ssh instanceof SSH1) {
            \$this->packet_size = 50000;
            \$this->mode = self::MODE_SSH1;
        } else {
            return;
        }

        \$this->ssh = \$ssh;
    }

    /**
     * Uploads a file to the SCP server.
     *
     * By default, \\phpseclib\\Net\\SCP::put() does not read from the local filesystem.  \$data is dumped directly into \$remote_file.
     * So, for example, if you set \$data to 'filename.ext' and then do \\phpseclib\\Net\\SCP::get(), you will get a file, twelve bytes
     * long, containing 'filename.ext' as its contents.
     *
     * Setting \$mode to self::SOURCE_LOCAL_FILE will change the above behavior.  With self::SOURCE_LOCAL_FILE, \$remote_file will
     * contain as many bytes as filename.ext does on your local filesystem.  If your filename.ext is 1MB then that is how
     * large \$remote_file will be, as well.
     *
     * Currently, only binary mode is supported.  As such, if the line endings need to be adjusted, you will need to take
     * care of that, yourself.
     *
     * @param string \$remote_file
     * @param string \$data
     * @param int \$mode
     * @param callable \$callback
     * @return bool
     * @access public
     */
    function put(\$remote_file, \$data, \$mode = self::SOURCE_STRING, \$callback = null)
    {
        if (!isset(\$this->ssh)) {
            return false;
        }

        if (empty(\$remote_file)) {
            user_error('remote_file cannot be blank', E_USER_NOTICE);
            return false;
        }

        if (!\$this->ssh->exec('scp -t ' . escapeshellarg(\$remote_file), false)) { // -t = to
            return false;
        }

        \$temp = \$this->_receive();
        if (\$temp !== chr(0)) {
            return false;
        }

        if (\$this->mode == self::MODE_SSH2) {
            \$this->packet_size = \$this->ssh->packet_size_client_to_server[SSH2::CHANNEL_EXEC] - 4;
        }

        \$remote_file = basename(\$remote_file);

        if (\$mode == self::SOURCE_STRING) {
            \$size = strlen(\$data);
        } else {
            if (!is_file(\$data)) {
                user_error(\"\$data is not a valid file\", E_USER_NOTICE);
                return false;
            }

            \$fp = @fopen(\$data, 'rb');
            if (!\$fp) {
                return false;
            }
            \$size = filesize(\$data);
        }

        \$this->_send('C0644 ' . \$size . ' ' . \$remote_file . \"\\n\");

        \$temp = \$this->_receive();
        if (\$temp !== chr(0)) {
            return false;
        }

        \$sent = 0;
        while (\$sent < \$size) {
            \$temp = \$mode & self::SOURCE_STRING ? substr(\$data, \$sent, \$this->packet_size) : fread(\$fp, \$this->packet_size);
            \$this->_send(\$temp);
            \$sent+= strlen(\$temp);

            if (is_callable(\$callback)) {
                call_user_func(\$callback, \$sent);
            }
        }
        \$this->_close();

        if (\$mode != self::SOURCE_STRING) {
            fclose(\$fp);
        }

        return true;
    }

    /**
     * Downloads a file from the SCP server.
     *
     * Returns a string containing the contents of \$remote_file if \$local_file is left undefined or a boolean false if
     * the operation was unsuccessful.  If \$local_file is defined, returns true or false depending on the success of the
     * operation
     *
     * @param string \$remote_file
     * @param string \$local_file
     * @return mixed
     * @access public
     */
    function get(\$remote_file, \$local_file = false)
    {
        if (!isset(\$this->ssh)) {
            return false;
        }

        if (!\$this->ssh->exec('scp -f ' . escapeshellarg(\$remote_file), false)) { // -f = from
            return false;
        }

        \$this->_send(\"\\0\");

        if (!preg_match('#(?<perms>[^ ]+) (?<size>\\d+) (?<name>.+)#', rtrim(\$this->_receive()), \$info)) {
            return false;
        }

        \$this->_send(\"\\0\");

        \$size = 0;

        if (\$local_file !== false) {
            \$fp = @fopen(\$local_file, 'wb');
            if (!\$fp) {
                return false;
            }
        }

        \$content = '';
        while (\$size < \$info['size']) {
            \$data = \$this->_receive();
            // SCP usually seems to split stuff out into 16k chunks
            \$size+= strlen(\$data);

            if (\$local_file === false) {
                \$content.= \$data;
            } else {
                fputs(\$fp, \$data);
            }
        }

        \$this->_close();

        if (\$local_file !== false) {
            fclose(\$fp);
            return true;
        }

        return \$content;
    }

    /**
     * Sends a packet to an SSH server
     *
     * @param string \$data
     * @access private
     */
    function _send(\$data)
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                \$this->ssh->_send_channel_packet(SSH2::CHANNEL_EXEC, \$data);
                break;
            case self::MODE_SSH1:
                \$data = pack('CNa*', NET_SSH1_CMSG_STDIN_DATA, strlen(\$data), \$data);
                \$this->ssh->_send_binary_packet(\$data);
        }
    }

    /**
     * Receives a packet from an SSH server
     *
     * @return string
     * @access private
     */
    function _receive()
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                return \$this->ssh->_get_channel_packet(SSH2::CHANNEL_EXEC, true);
            case self::MODE_SSH1:
                if (!\$this->ssh->bitmap) {
                    return false;
                }
                while (true) {
                    \$response = \$this->ssh->_get_binary_packet();
                    switch (\$response[SSH1::RESPONSE_TYPE]) {
                        case NET_SSH1_SMSG_STDOUT_DATA:
                            if (strlen(\$response[SSH1::RESPONSE_DATA]) < 4) {
                                return false;
                            }
                            extract(unpack('Nlength', \$response[SSH1::RESPONSE_DATA]));
                            return \$this->ssh->_string_shift(\$response[SSH1::RESPONSE_DATA], \$length);
                        case NET_SSH1_SMSG_STDERR_DATA:
                            break;
                        case NET_SSH1_SMSG_EXITSTATUS:
                            \$this->ssh->_send_binary_packet(chr(NET_SSH1_CMSG_EXIT_CONFIRMATION));
                            fclose(\$this->ssh->fsock);
                            \$this->ssh->bitmap = 0;
                            return false;
                        default:
                            user_error('Unknown packet received', E_USER_NOTICE);
                            return false;
                    }
                }
        }
    }

    /**
     * Closes the connection to an SSH server
     *
     * @access private
     */
    function _close()
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                \$this->ssh->_close_channel(SSH2::CHANNEL_EXEC, true);
                break;
            case self::MODE_SSH1:
                \$this->ssh->disconnect();
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
        return "AmazonPayV2_42_Bundle/phpseclib/Net/SCP.php";
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
 * Pure-PHP implementation of SCP.
 *
 * PHP version 5
 *
 * The API for this library is modeled after the API from PHP's {@link http://php.net/book.ftp FTP extension}.
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *    include 'vendor/autoload.php';
 *
 *    \$ssh = new \\phpseclib\\Net\\SSH2('www.domain.tld');
 *    if (!\$ssh->login('username', 'password')) {
 *        exit('bad login');
 *    }
 *    \$scp = new \\phpseclib\\Net\\SCP(\$ssh);
 *
 *    \$scp->put('abcd', str_repeat('x', 1024*1024));
 * ?>
 * </code>
 *
 * @category  Net
 * @package   SCP
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2010 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Net;

/**
 * Pure-PHP implementations of SCP.
 *
 * @package SCP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class SCP
{
    /**#@+
     * @access public
     * @see \\phpseclib\\Net\\SCP::put()
     */
    /**
     * Reads data from a local file.
     */
    const SOURCE_LOCAL_FILE = 1;
    /**
     * Reads data from a string.
     */
    const SOURCE_STRING = 2;
    /**#@-*/

    /**#@+
     * @access private
     * @see \\phpseclib\\Net\\SCP::_send()
     * @see \\phpseclib\\Net\\SCP::_receive()
    */
    /**
     * SSH1 is being used.
     */
    const MODE_SSH1 = 1;
    /**
     * SSH2 is being used.
     */
    const MODE_SSH2 =  2;
    /**#@-*/

    /**
     * SSH Object
     *
     * @var object
     * @access private
     */
    var \$ssh;

    /**
     * Packet Size
     *
     * @var int
     * @access private
     */
    var \$packet_size;

    /**
     * Mode
     *
     * @var int
     * @access private
     */
    var \$mode;

    /**
     * Default Constructor.
     *
     * Connects to an SSH server
     *
     * @param \\phpseclib\\Net\\SSH1|\\phpseclib\\Net\\SSH2 \$ssh
     * @return \\phpseclib\\Net\\SCP
     * @access public
     */
    function __construct(\$ssh)
    {
        if (\$ssh instanceof SSH2) {
            \$this->mode = self::MODE_SSH2;
        } elseif (\$ssh instanceof SSH1) {
            \$this->packet_size = 50000;
            \$this->mode = self::MODE_SSH1;
        } else {
            return;
        }

        \$this->ssh = \$ssh;
    }

    /**
     * Uploads a file to the SCP server.
     *
     * By default, \\phpseclib\\Net\\SCP::put() does not read from the local filesystem.  \$data is dumped directly into \$remote_file.
     * So, for example, if you set \$data to 'filename.ext' and then do \\phpseclib\\Net\\SCP::get(), you will get a file, twelve bytes
     * long, containing 'filename.ext' as its contents.
     *
     * Setting \$mode to self::SOURCE_LOCAL_FILE will change the above behavior.  With self::SOURCE_LOCAL_FILE, \$remote_file will
     * contain as many bytes as filename.ext does on your local filesystem.  If your filename.ext is 1MB then that is how
     * large \$remote_file will be, as well.
     *
     * Currently, only binary mode is supported.  As such, if the line endings need to be adjusted, you will need to take
     * care of that, yourself.
     *
     * @param string \$remote_file
     * @param string \$data
     * @param int \$mode
     * @param callable \$callback
     * @return bool
     * @access public
     */
    function put(\$remote_file, \$data, \$mode = self::SOURCE_STRING, \$callback = null)
    {
        if (!isset(\$this->ssh)) {
            return false;
        }

        if (empty(\$remote_file)) {
            user_error('remote_file cannot be blank', E_USER_NOTICE);
            return false;
        }

        if (!\$this->ssh->exec('scp -t ' . escapeshellarg(\$remote_file), false)) { // -t = to
            return false;
        }

        \$temp = \$this->_receive();
        if (\$temp !== chr(0)) {
            return false;
        }

        if (\$this->mode == self::MODE_SSH2) {
            \$this->packet_size = \$this->ssh->packet_size_client_to_server[SSH2::CHANNEL_EXEC] - 4;
        }

        \$remote_file = basename(\$remote_file);

        if (\$mode == self::SOURCE_STRING) {
            \$size = strlen(\$data);
        } else {
            if (!is_file(\$data)) {
                user_error(\"\$data is not a valid file\", E_USER_NOTICE);
                return false;
            }

            \$fp = @fopen(\$data, 'rb');
            if (!\$fp) {
                return false;
            }
            \$size = filesize(\$data);
        }

        \$this->_send('C0644 ' . \$size . ' ' . \$remote_file . \"\\n\");

        \$temp = \$this->_receive();
        if (\$temp !== chr(0)) {
            return false;
        }

        \$sent = 0;
        while (\$sent < \$size) {
            \$temp = \$mode & self::SOURCE_STRING ? substr(\$data, \$sent, \$this->packet_size) : fread(\$fp, \$this->packet_size);
            \$this->_send(\$temp);
            \$sent+= strlen(\$temp);

            if (is_callable(\$callback)) {
                call_user_func(\$callback, \$sent);
            }
        }
        \$this->_close();

        if (\$mode != self::SOURCE_STRING) {
            fclose(\$fp);
        }

        return true;
    }

    /**
     * Downloads a file from the SCP server.
     *
     * Returns a string containing the contents of \$remote_file if \$local_file is left undefined or a boolean false if
     * the operation was unsuccessful.  If \$local_file is defined, returns true or false depending on the success of the
     * operation
     *
     * @param string \$remote_file
     * @param string \$local_file
     * @return mixed
     * @access public
     */
    function get(\$remote_file, \$local_file = false)
    {
        if (!isset(\$this->ssh)) {
            return false;
        }

        if (!\$this->ssh->exec('scp -f ' . escapeshellarg(\$remote_file), false)) { // -f = from
            return false;
        }

        \$this->_send(\"\\0\");

        if (!preg_match('#(?<perms>[^ ]+) (?<size>\\d+) (?<name>.+)#', rtrim(\$this->_receive()), \$info)) {
            return false;
        }

        \$this->_send(\"\\0\");

        \$size = 0;

        if (\$local_file !== false) {
            \$fp = @fopen(\$local_file, 'wb');
            if (!\$fp) {
                return false;
            }
        }

        \$content = '';
        while (\$size < \$info['size']) {
            \$data = \$this->_receive();
            // SCP usually seems to split stuff out into 16k chunks
            \$size+= strlen(\$data);

            if (\$local_file === false) {
                \$content.= \$data;
            } else {
                fputs(\$fp, \$data);
            }
        }

        \$this->_close();

        if (\$local_file !== false) {
            fclose(\$fp);
            return true;
        }

        return \$content;
    }

    /**
     * Sends a packet to an SSH server
     *
     * @param string \$data
     * @access private
     */
    function _send(\$data)
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                \$this->ssh->_send_channel_packet(SSH2::CHANNEL_EXEC, \$data);
                break;
            case self::MODE_SSH1:
                \$data = pack('CNa*', NET_SSH1_CMSG_STDIN_DATA, strlen(\$data), \$data);
                \$this->ssh->_send_binary_packet(\$data);
        }
    }

    /**
     * Receives a packet from an SSH server
     *
     * @return string
     * @access private
     */
    function _receive()
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                return \$this->ssh->_get_channel_packet(SSH2::CHANNEL_EXEC, true);
            case self::MODE_SSH1:
                if (!\$this->ssh->bitmap) {
                    return false;
                }
                while (true) {
                    \$response = \$this->ssh->_get_binary_packet();
                    switch (\$response[SSH1::RESPONSE_TYPE]) {
                        case NET_SSH1_SMSG_STDOUT_DATA:
                            if (strlen(\$response[SSH1::RESPONSE_DATA]) < 4) {
                                return false;
                            }
                            extract(unpack('Nlength', \$response[SSH1::RESPONSE_DATA]));
                            return \$this->ssh->_string_shift(\$response[SSH1::RESPONSE_DATA], \$length);
                        case NET_SSH1_SMSG_STDERR_DATA:
                            break;
                        case NET_SSH1_SMSG_EXITSTATUS:
                            \$this->ssh->_send_binary_packet(chr(NET_SSH1_CMSG_EXIT_CONFIRMATION));
                            fclose(\$this->ssh->fsock);
                            \$this->ssh->bitmap = 0;
                            return false;
                        default:
                            user_error('Unknown packet received', E_USER_NOTICE);
                            return false;
                    }
                }
        }
    }

    /**
     * Closes the connection to an SSH server
     *
     * @access private
     */
    function _close()
    {
        switch (\$this->mode) {
            case self::MODE_SSH2:
                \$this->ssh->_close_channel(SSH2::CHANNEL_EXEC, true);
                break;
            case self::MODE_SSH1:
                \$this->ssh->disconnect();
        }
    }
}
", "AmazonPayV2_42_Bundle/phpseclib/Net/SCP.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Net\\SCP.php");
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
