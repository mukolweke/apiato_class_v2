<?php

//$router->get('/', [
//    'as'   => 'get_main_home_page',
//    'uses' => 'Controller@sayWelcome',
//]);

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@index',
]);


$router->get('/boards', [
    'as' => 'web_boards_index',
    'uses'  => 'Controller@board',
]);

$router->get('/members', [
    'as' => 'web_members_index',
    'uses'  => 'Controller@member',
]);

$router->get('/committees', [
    'as' => 'web_committees_index',
    'uses'  => 'Controller@committee',
]);


