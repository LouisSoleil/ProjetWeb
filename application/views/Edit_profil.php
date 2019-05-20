<link rel="stylesheet" href="<?php echo base_url('application/assets/Register.css');?>">
</head>
<body>
	<div class ="container">
		<div class ="row">
			<div class="col-sm-12">
				<h2>Modifier son profil</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form method ="post" action ="<?php echo site_url('Users/update')?>">
				<?php if($Users) {?> 
				<div class="form-group">
					<label for="Register">Email :</label>
					<input type="email" class="form-control" name="EmailEleve" id="EmailEleve" value ="<?php echo $Users[0]->EmailEleve; ?>" >
				</div> 
				<div class="form-group">
					<label for="Register">Ancien Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleve" id="MDPEleve" placeholder= "Entre ton Mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Nouveau Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleveN1" id="MDP" placeholder="Ne rien rentrer si tu ne veux pas le modifier">
				</div>
				<div class="form-group">
					<label for="Register"> Confirmer Nouveau Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleveN2" placeholder="Ne rien rentrer si tu ne veux pas le modifier">
				</div>
				<div class="form-group">
					<label for="Register">Nom :</label>
					<input type="charset" class="form-control" name="NomEleve" id="NomEleve" value ="<?php echo $Users[0]->NomEleve; ?>" placeholder="<?php echo $Users[0]->NomEleve; ?>">
				</div>
				<div class="form-group">
					<label for="Register">Prénom :</label>
					<input type="charset" class="form-control" name="PrenomEleve" id="PrenomEleve" value ="<?php echo $Users[0]->PrenomEleve; ?>" placeholder="<?php echo $Users[0]->PrenomEleve; ?>">
				</div>
				<div class="form-group">
					<label for="Register">Classe :</label>
					<input type="charset" class="form-control" name="Classe" id="Classe" value ="<?php echo $Users[0]->IdAnnee; ?>">
				</div>
				<div class="row">
					<button type="submit" class="btn btn-success" value="save">Enregistrer</button>
				</div>
			<?php }?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>