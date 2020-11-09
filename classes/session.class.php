<?php

class Session{

public static function setSession($key, $value) {

    $_SESSION[$key] = $value;
}

public static function getSession ($key) {
if (isset($_SESSION[$key])) {
    return $_SESSION[$key];
} else {
    return false;
}
}

}