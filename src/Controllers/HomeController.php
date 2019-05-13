<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;
use App\View\Test;

class HomeController{
	function index(){
		$response = new Response();
	    $response->getBody()->write('<h1>Hello, World!</h1>');
	    return $response;
	}

	function test(){
		$response = new Response();
	    $response->getBody()->write(Test::oui());
	    return $response;
	}

	function testpost(ServerRequestInterface $request){
	    $response = new Response();
        $response->getBody()->write($request->getParsedBody()["oui"]);
        return $response;
	}
}