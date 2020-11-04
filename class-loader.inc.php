<?php spl_autoload_register('autoLoadClasses');

function autoLoadClasses($className) {

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {

        $path = '../classes/';

    } else {
        $path = 'classes/';
    }
    
    $extenstion = "class.php";
    $finalPath = $path . $className . $extenstion;

    if(!file_exists($finalPath)) {
        return false;
    }

    include_once $finalPath;

}