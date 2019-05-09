<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/CI/application/assets/Register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>


</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<img  src="/CI/application/JPEG/logo.gif" class="navbar-brand" href="#"></img>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Acceuil</a></li>
					<li><a href="#">Classement</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">A propos</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
				</ul>
				</div>
			</div>
			</nav>
	<div class ="container">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="NumEtu">Numéro étudiant :</label>
     			<input type="int" class="form-control" id="NumEtu" placeholder="Entre ton numéro étudiant">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
     			<input type="email" class="form-control" id="EmailEtu" placeholder="Entre ton mail universitaire">
			</div>
			<div class="form-group">
				<label for="MDPEtu">Mot de passe :</label>
     			<input type="charset" class="form-control" id="MDPEtu" placeholder="Entre ton mot de passe">
			</div>
			<div class="form-group">
				<label for="MDPEtu">Confirmation Mot de passe :</label>
     			<input type="charset" class="form-control" id="MDPEtu" placeholder="Entre à nouveau ton mot de passe">
			</div>
			<div class="form-group">
				<label for="NomEtu">Nom :</label>
     			<input type="charset" class="form-control" id="NomEtu" placeholder="Entre ton nom">
			</div>
			<div class="form-group">
				<label for="PrenomEtu">Prénom :</label>
     			<input type="charset" class="form-control" id="PrenomEtu" placeholder="Entre ton prénom">
     		</div>
			<div class="form-group">
				<label for="PseudoEtu">Pseudo :</label>
     			<input type="charset" class="form-control" id="PseudoEtu" placeholder="Entre ton pseudo">
			</div>
		</div>
	</div>

</body>
</html>