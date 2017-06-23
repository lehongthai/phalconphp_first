<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
)->register();

$loader->registerNamespaces([
    'App\Library' => $config->application->libraryDir,
    'App\Middleware' => $config->application->middlewareDir,
]);
