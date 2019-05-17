<?php

namespace App\Views;

class EtudiantView {

	static function display($data){
		return "<!DOCTYPE html>
			<html>
			<head>
				<title>Voici l'étudiant".$data['student']->getPrenom()." ".$data['student']->getNom()."</title>
			</head>
			<body>
				<h2> Formation : ".$data['student']->getFormation()."</h2>
				<h2> Mail : ".$data['student']->getPassword()."</h2>
			</body>
			</html>";
	}
}
