<?php

/**
 * @apiGroup           Boards
 * @apiName            createBoards
 *
 * @api                {POST} /v1/boards Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('boards', [
    'as' => 'api_boards_create_boards',
    'uses'  => 'Controller@createBoards',
    'middleware' => [
      'auth:api',
    ],
]);
