<?php

    /**
     * Create Entrypoint:
     * - This file will use framework classes
     * - Assign Directory to autoloader in vendor
     * - Include "use" statement for framework classes
     */

    // include framework
    require(__DIR__ . "/../vendor/autoload.php"); // <-- File created by composer

    // use framework classes
    use mnaatjes\MyFramework\HelloWorld;

    // Execute test
    $obj = new HelloWorld();

    echo $obj->sayHello();

?>