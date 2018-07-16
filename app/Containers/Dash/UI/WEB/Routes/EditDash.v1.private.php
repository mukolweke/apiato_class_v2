<?php

/** @var Route $router */
$router->get('home/{id}/edit', [
    'as' => 'web_dash_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
