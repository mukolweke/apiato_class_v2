<?php

/**
 * @apiGroup           Dash
 * @apiName            getAllDashes
 *
 * @api                {GET} /v1/dashes Endpoint title here..
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
$router->get('dashes', [
    'as' => 'api_dash_get_all_dashes',
    'uses'  => 'Controller@getAllDashes',
    'middleware' => [
      'auth:api',
    ],
]);
