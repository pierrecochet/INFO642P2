<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;
use App\Views\EtudiantView;
use App\Views\Login;
use App\Models\Etudiant;


class HomeController{
	function index(){
		header('Location:  /login');
	}


	function test(ServerRequestInterface $request, array $args)
    {
        $data = [];
        $id = $args['id'];
        $current_student = Etudiant::get_by_id($id);
//        print("-----------------------------\n");
//        echo "<pre>";
//        var_dump($current_student);
//        echo "</pre>";
        $data['student'] = $current_student;
        $response = new Response();
        $response->getBody()->write(EtudiantView::display($data));

        return $response;
    }

	function login(){
		$response = new Response();
	    $response->getBody()->write(Login::voidlogin());
	    return $response;
	}


}