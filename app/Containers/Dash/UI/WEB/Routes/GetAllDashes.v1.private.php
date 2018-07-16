<?php

/** @var Route $router */
$router->get('home', [
    'as' => 'web_dash_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
