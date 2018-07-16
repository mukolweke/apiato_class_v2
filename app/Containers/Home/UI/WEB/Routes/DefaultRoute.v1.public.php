<?php

/** @var Route $router */
$router->get('home', [
    'as' => 'web_home_home_controller',
    'uses'  => 'Controller@HomeController',
    'middleware' => [
      'auth:web',
    ],
]);
