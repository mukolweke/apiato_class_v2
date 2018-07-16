<?php

$router->get('/blog', [
    'as'   => 'get_blog_home_page',
    'uses' => 'Controller@showIndex',
]);

$router->post('/addForm', [
    'uses' => 'Controller@postForm',
]);
