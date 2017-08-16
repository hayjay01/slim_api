<?php
use \Psr\Http\Message\ServerRequestInterface as Request; //this line is for Request that will be used in talking with route to accept values to slim
use \Psr\Http\Message\ResponseInterface as Response; //this line is for Response that will be used in talking with route to display values in json format

require '..vendor/autoload.php'; //here, we need go out to the vendor folder with the .. and ggrab the autoload file 

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();