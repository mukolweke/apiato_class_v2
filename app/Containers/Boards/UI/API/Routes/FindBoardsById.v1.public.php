<?php

/**
 * @apiGroup           Boards
 * @apiName            findBoardsById
 *
 * @api                {GET} /v1/boards/:id Endpoint title here..
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
$router->get('boards/{id}', [
    'as' => 'api_boards_find_boards_by_id',
    'uses'  => 'Controller@findBoardsById',
    'middleware' => [
      'auth:api',
    ],
]);
