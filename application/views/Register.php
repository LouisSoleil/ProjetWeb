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
<style>


</style>
</head>
<body>
<div class ="container">
	<div class ="row">
		<div class="col-sm-12">
			<h2>Nouveau sur le site ?</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<form method ="post" action ="<?php echo site_url('Registers/enrol')?>">
			<div class="form-group">
				<label for="NumEleve">Numéro étudiant :</label>
				<input type="int" class="form-control" id="NumEleve" placeholder="Entre ton numéro étudiant">
			</div>
			<div class="form-group">
				<label for="EmailEleve">Email :</label>
				<input type="email" class="form-control" id="EmailEleve" placeholder="Entre ton mail universitaire">
			</div>
			<div class="form-group">
				<label for="MDPEleve1">Mot de passe :</label>
				<input type="charset" class="form-control" id="MDPEleve1" placeholder="Entre ton mot de passe">
			</div>
			<div class="form-group">
				<label for="MDPEleve2">Confirmation Mot de passe :</label>
				<input type="charset" class="form-control" id="MDPEleve2" placeholder="Entre à nouveau ton mot de passe">
			</div>
			<div class="form-group">
				<label for="NomEleve">Nom :</label>
				<input type="charset" class="form-control" id="NomEtu" placeholder="Entre ton nom">
			</div>
			<div class="form-group">
				<label for="PrenomEleve">Prénom :</label>
				<input type="charset" class="form-control" id="PrenomEleve" placeholder="Entre ton prénom">
			</div>
			<div class="form-group">
				<label for="PseudoEleve">Pseudo :</label>
				<input type="charset" class="form-control" id="PseudoEleve" placeholder="Entre ton pseudo">
			</div>
			<div class="form-group">
				<label for="IdAnnee">Classe :</label>
					<input type="charset" class="form-control" id="IdAnnee" placeholder="Choisis ta classe">
			</form>
			</div>
		</div>
	</div>
	<div class="row">
		<button type="button" class="btn btn-success">S'inscrire</button>
	</div>
</div>
</body>
</html>