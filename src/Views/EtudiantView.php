<?php

namespace App\Views;

class EtudiantView {

	static function display($data){
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
					<div class="etu__roll">
						<h1>'.$data['student']->getPrenom()." ".$data['student']->getNom().'</h1>
						<div class="table__container">
							<h2 class="titre">Demandes</h2>
							<table class="table">
								<tr>
									<th>Demande</th>
									<th>Description</th> 
									<th>Etat</th>
									<th></th>
								</tr>
								<tr>
									<td>Lorem Ipsum</td>
									<td>Lorem Ipsum</td> 
									<td>Lorem Ipsum</td>
									<td class="align-right" ><a class="button button--inline" href="">Explorer</a></td>
								</tr>
								<tr>
									<td>Lorem Ipsum</td>
									<td>Lorem Ipsum</td> 
									<td>Lorem Ipsum</td>
									<td class="align-right" ><a class="button button--inline" href="">Explorer</a></td>
								</tr>
								<tr>
									<td>Lorem Ipsum</td>
									<td>Lorem Ipsum</td> 
									<td>Lorem Ipsum</td>
									<td class="align-right" ><a class="button button--inline" href="">Explorer</a></td>
								</tr>
								<tr>
									<td>Lorem Ipsum</td>
									<td>Lorem Ipsum</td> 
									<td>Lorem Ipsum</td>
									<td class="align-right" ><a class="button button--inline" href="">Explorer</a></td>
								</tr>
							</table>
						</div>
						<div class="form__container">
							<h2 class="titre">Nouvelle Demande</h2>
							<form>
								<
							</form>
						</div>
					</div>
				</div>
			</body>
			</html>
			'
	}
}
