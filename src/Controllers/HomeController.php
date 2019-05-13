<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;
use App\Views\EtudiantView;
use App\Models\Etudiant;

class HomeController{
	function index(){
		$response = new Response();
	    $response->getBody()->write('<h1>Hello, World!</h1>');
	    return $response;
	}

	function test(ServerRequestInterface $request, array $args){
		$data = [];
		$id = $args['id'];
		$current_student = new Etudiant();
		$current_student->get_by_id($id);
		//print("-----------------------------\n");
        //echo "<pre>";
		//var_dump($current_student);
        //echo "</pre>";
		$data['student'] = $current_student;
		$response = new Response();
	    $response->getBody()->write(EtudiantView::display($data));
	    return $response;
	}

	function testpost(ServerRequestInterface $request){
	    $response = new Response();
        $response->getBody()->write($request->getParsedBody()["oui"]);
        return $response;
	}
}