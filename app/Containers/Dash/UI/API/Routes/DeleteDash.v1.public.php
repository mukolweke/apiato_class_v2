<?php

/**
 * @apiGroup           Dash
 * @apiName            deleteDash
 *
 * @api                {DELETE} /v1/dashes/:id Endpoint title here..
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
$router->delete('dashes/{id}', [
    'as' => 'api_dash_delete_dash',
    'uses'  => 'Controller@deleteDash',
    'middleware' => [
      'auth:api',
    ],
]);
