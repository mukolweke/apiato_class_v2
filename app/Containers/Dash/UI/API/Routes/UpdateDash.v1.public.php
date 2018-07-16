<?php

/**
 * @apiGroup           Dash
 * @apiName            updateDash
 *
 * @api                {PATCH} /v1/dashes/:id Endpoint title here..
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
$router->patch('dashes/{id}', [
    'as' => 'api_dash_update_dash',
    'uses'  => 'Controller@updateDash',
    'middleware' => [
      'auth:api',
    ],
]);
