<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;
use App\View\Login;

class HomeController{
	function index(){
		header('Location:  /login');
	}

	function login(){
		$response = new Response();
	    $response->getBody()->write(Login::voidlogin());
	    return $response;
	}

	function testpost(ServerRequestInterface $request){
	    $response = new Response();
        $response->getBody()->write($request->getParsedBody()["id"]);
        return $response;
	}
    function testpost1(ServerRequestInterface $request){
        $response = new Response();
        $response->getBody()->write($request->getParsedBody()["mdp"]);
        return $response;
    }
}