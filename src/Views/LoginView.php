<?php

namespace App\Views;

class LoginView {

	static function getlogin(){
		return '
<!DOCTYPE html>
<html>
<head>
	<title>FrancoProject</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="background">
		<img class="bg__img" src="/images/129763.jpg">
		<div class="login__layer">
			<h2 class="login__title">FrancoPROJECT</h2>
			<form action="." method="post" class="login__form">
				<div class="login__form__text">
					<input class="login__input" type="text" name="name" id="name" placeholder="Username">
				</div>
				<div class="login__form__text">
					<input class="login__input" type="Password" name="Password" id="Password" placeholder="Password">
				</div>
				<div class="login__form__submit">
					<input class="login__button" type="submit" value="Se Connecter">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
    ';}

    static function connected(){
        return '
<!DOCTYPE html>
<html>
<head>
	<title>FrancoProject</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/css/styleLogin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div>
	Login fonctionnelle
	</div>
</body>
</html>
    ';}
}
