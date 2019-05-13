<?php

namespace App\View;

class Login {

	static function voidlogin(){
		return "<!DOCTYPE html>
			<html>
			<head>
				<title>login</title>
			</head>
			<body>
				<form action=\"/\" method=\"post\">
					<input type=\"text\" name=\"id\">
					<input type=\"text\" name=\"mdp\">
					<button>login</button>
				</form>
			</body>
			</html>";
	}
}
