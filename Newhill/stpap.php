<?php

spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (!file_exists($file)) {
        throw new Exception("Class {$class_name} doesn't exist in {$file} way");
    }
    require_once __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';

});


use Class\User;
use Class\Kyses\User as UserKyses;

echo "<br>";
User::call();
echo "<br>";
UserKyses::call();