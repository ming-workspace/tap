<?php
define(SESSION_NAMESPACE, "tap");

class SessionUtil {
    protected $_session = null;
    static $singleton;

    function __construct() {
        //session_start
        if (ini_get('session.auto_start') != 1) {
            session_start();
            if (!isset($_SESSION['initiated']) && !strpos($_SERVER["SCRIPT_FILENAME"], "/bin/convert.php")) {
                // session_destroy();
                session_regenerate_id(TRUE);
                $_SESSION['initiated'] = true;
            }
        }

        //create session reference
        $this -> _session = &$_SESSION;
    }

    public static function getInstance() {
        if (EZSession::$singleton) {
            return EZSession::$singleton;
        }
        EZSession::$singleton = new EZSession();
        return EZSession::$singleton;
    }

    function all() {
        return $this -> _session;
    }

    function clear() {
        $this -> _session = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();
    }

    function get($keys, $ns = SESSION_NAMESPACE, $default = null) {
        if (!$ns) {
            trigger_error(sprintf("#invalid session_namespace. - %s - %s", __FILE__, __LINE__), E_USER_ERROR);
        }

        if (is_array($keys)) {
            $ra = array();
            foreach ($keys as $k) {
                if (isset($this -> _session[$ns][$k])) {
                    $ra[$k] = $this -> _session[$ns][$k];
                }
            }
            return $ra;

        } else {
            if (isset($this -> _session[$ns][$keys])) {
                return $this -> _session[$ns][$keys];
            } else {
                return $default;
            }
        }

    }

    function getAll($ns = SESSION_NAMESPACE) {
        if (!isset($this -> _session[$ns])) {
            $this -> _session[$ns] = array();
        }

        return $this -> _session[$ns];
    }

    function getKeys($ns = SESSION_NAMESPACE) {
        if (isset($this -> _session[$ns])) {
            return array_keys($this -> _session[$ns]);
        }

        return array();
    }

    function has($key, $ns = SESSION_NAMESPACE) {
        if (isset($this -> _session[$ns][$key])) {
            return true;
        } else {
            return false;
        }
    }

    function remove($key, $ns = SESSION_NAMESPACE) {
        if (isset($this -> _session[$ns][$key])) {
            unset($this -> _session[$ns][$key]);
        }
    }

    function removeAll($ns = SESSION_NAMESPACE) {
        if (isset($this -> _session[$ns])) {
            //$this->_session[$ns] = array();
            unset($this -> _session[$ns]);
        }
    }

    function set($key, $value, $ns = SESSION_NAMESPACE) {
        if (is_string($value)) {
            $this -> _session[$ns][$key] = trim($value);
        } else {
            $this -> _session[$ns][$key] = $value;
        }
    }

    function setAll(&$data, $ns = SESSION_NAMESPACE, $mode = false) {
        if ($mode == true) {
            $this -> _session[$ns] = $data;
        } else {
            if (!isset($this -> _session[$ns])) {
                $this -> _session[$ns] = array();
            }
            $this -> _session[$ns] = array_merge($this -> _session[$ns], $data);
        }
    }

}
