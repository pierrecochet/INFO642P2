<?php

namespace App\Controllers;

use App\Models\Intervenant;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;
use App\Views\EtudiantView;
use App\Views\LoginView;
use App\Models\Etudiant;


class LoginController{
	function index(){
		header('Location:  /login');
	}

	function test(ServerRequestInterface $request, array $args)
    {
        $data = [];
        $id = $args['id'];
        $current_student = Etudiant::get_by_id($id);
        $data['student'] = $current_student;
        $response = new Response();
        $response->getBody()->write(EtudiantView::display($data));
        return $response;
    }

	function login(){
		$response = new Response();
	    $response->getBody()->write(LoginView::getLogin());
	    return $response;
	}

    function loginPost(ServerRequestInterface $request){
	    $username = $request->getParsedBody()['name'];
        $pwd = $request->getParsedBody()['password'];
        $conn = Etudiant::check_connexion($username,$pwd);
        if($etudiant = Etudiant::check_connexion()) {
            session_start();
            $_SESSION["auth"]["name"]=$username;
            $_SESSION["auth"]["pasword"]=$pwd;
            //return view main etudiant
        }
        if($intervenant = Intervenant::check_connexion()) {
            //return view main etudiant
        }
        if($professeur = Professeur::check_connexion()) {
            //return view main etudiant
        }
        $session = $request->

        header('Location:  /login');

//        var_dump(Etudiant::check_connexion($id,$pwd));
//        $response = new Response();
//        $response->getBody()->write(LoginView::connected());
//        return $response;
    }


}