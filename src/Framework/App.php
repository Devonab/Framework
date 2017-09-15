<?php

namespace Framework;

use GuzzleHttp\Psr7\Reponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App {

  public function run(ServerRequestInterface $request): ResponseInterface {
    $uri = $request->getUri()->getPath();

    if(!empty($uri) && $uri[-1] === '/') {
      return (new Reponse())
        ->withStatus(301)
        ->withHeader('Location', substr($uri, 0, -1));
    }

    $response = new Reponse();
    $response->getBody()->write('Bonjour');
    return $reponse;
  }

}
