<?php

/** @var Route $router */
$router->get('members', [
    'as' => 'web_members_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
