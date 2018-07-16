<?php

/** @var Route $router */
$router->patch('home/{id}', [
    'as' => 'web_dash_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
