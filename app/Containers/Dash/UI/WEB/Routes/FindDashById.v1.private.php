<?php

/** @var Route $router */
$router->get('home/{id}', [
    'as' => 'web_dash_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
