<?php

namespace App\Controllers;

use Zend\Diactoros\Response;

class HomeController{
	function index(){
		$response = new Response();
	    $response->getBody()->write('<h1>Hello, World!</h1>');
	    return $response;
	}
}