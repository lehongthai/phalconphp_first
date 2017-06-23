<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet(
    '/products/edit/{id}',
    'Products::edit'
);

$router->handle();

// Or Setting the URI value directly
//$router->handle("/products/edit");

