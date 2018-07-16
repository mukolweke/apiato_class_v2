<?php

/** @var Route $router */
$router->get('members/{id}', [
    'as' => 'web_members_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
