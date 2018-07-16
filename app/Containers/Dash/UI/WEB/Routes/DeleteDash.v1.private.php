<?php

/** @var Route $router */
$router->delete('home/{id}', [
    'as' => 'web_dash_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
