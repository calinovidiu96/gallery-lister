<?php
function __autoload($class){
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if(is_file($the_path) && !class_exists($class)){
        require_once $the_path;
    }
}

function redirect($location){
    header("Location: {$location}");
}

?>