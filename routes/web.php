<?php

/** @var \Laravel\Lumen\Routing\Router $router */
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get("/", function () use ($router) {
    echo "index";
});

$router->get("/builder", "ExampleController@builder");
$router->get("/factory", "ExampleController@factory");
$router->get("/repository", "ExampleController@repository");
$router->get("/strategy", "ExampleController@strategy");
