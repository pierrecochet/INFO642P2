<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;
use App\Views\EtudiantView;
use App\Models\Etudiant;
use App\View\Login;


class HomeController{
	function index(){
		header('Location:  /login');
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