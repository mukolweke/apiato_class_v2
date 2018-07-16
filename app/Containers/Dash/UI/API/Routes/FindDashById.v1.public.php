<?php

/**
 * @apiGroup           Dash
 * @apiName            findDashById
 *
 * @api                {GET} /v1/dashes/:id Endpoint title here..
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
$router->get('dashes/{id}', [
    'as' => 'api_dash_find_dash_by_id',
    'uses'  => 'Controller@findDashById',
    'middleware' => [
      'auth:api',
    ],
]);
