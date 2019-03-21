<?php
require('vendor/autoload.php');

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;
$app->post('/', function (Request $request, Response $response, array $args) {
    $body = $request->getBody();
    file_put_contents('php://stderr', $body . "\n");

    // you can do whatever with $body depending on your requirements

    $response = $response->withHeader('Validation-Token', $request->getHeader('Validation-Token'));
    $response->getBody()->write("");
    return $response;
});
$app->run();
