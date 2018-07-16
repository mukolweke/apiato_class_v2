<?php

/** @var Route $router */
$router->get('home/create', [
    'as' => 'web_dash_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
