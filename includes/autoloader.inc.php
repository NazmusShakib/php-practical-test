<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "classes/";
    $extensions =  ".class.php";
    $fullPath = $path . $className . $extensions;

    if(!file_exists($fullPath))
        return false;

    include_once $fullPath;
}