<?php
require_once '../src/App/Helper/helper.php';
spl_autoload_register(function ($className) {
    $file = '../src/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    if (file_exists($file)) {
        require_once $file;

        return true;
    }

    return false;
});
