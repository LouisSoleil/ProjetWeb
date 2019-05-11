<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
	<link rel="stylesheet" href="/ProjetWeb/application/assets/General.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="cl-sm-12">
				<h2>Connexion</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form method ="post" action ="<?php echo site_url('Registers/enrol')?>">
				<div class="form-group">
					<label for="Email">Ton Mail :</label>
					<input type="email" class="form-control" id="Email" placeholder="Entre ton mail">
				</div>
				<div class="form-group">
					<label for="MDP">Ton Mot de Passe :</label>
					<input type="charset" class="form-control" id="MDP" placeholder="Entre ton mot de passe">
				</div>
			</form>
		</div>
		<div class="row">
			<button type="button" class="btn btn-success">Se connecter</button>
		</div>
		<div class="row">
			<p><a href="/ProjetWeb/Registers">S'inscrire</a></p>
		</div>
	</div>
</body>