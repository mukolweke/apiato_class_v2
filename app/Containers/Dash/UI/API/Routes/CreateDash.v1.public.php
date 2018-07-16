<?php

/**
 * @apiGroup           Dash
 * @apiName            createDash
 *
 * @api                {POST} /v1/dashes Endpoint title here..
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
$router->post('dashes', [
    'as' => 'api_dash_create_dash',
    'uses'  => 'Controller@createDash',
    'middleware' => [
      'auth:api',
    ],
]);
