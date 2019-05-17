<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
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
				<form method ="post" action ="<?php echo site_url('Users/edit')?>">
				<?php if($Users) {?> 
				<div class="form-group">
					<label for="Register">Email :</label>
					<input type="email" class="form-control" name="EmailEleve" id="EmailEleve" value ="<?php echo $Users[0]->EmailEleve; ?>" placeholder="<?php echo $Users[0]->EmailEleve; ?>">
				</div> 
				<div class="form-group">
					<label for="Register">Ancien Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleve" id="MDPEleve" value ="<?php echo $Users[0]->MDPEleve; ?>" placeholder="Ne rien rentrer si tu ne veux pas le modifier">
				</div>
				<div class="form-group">
					<label for="Register">Nouveau Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleveN" id="MDP" placeholder="Ne rien rentrer si tu ne veux pas le modifier">
				</div>
				<div class="form-group">
					<label for="Register"> Confirmer Nouveau Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleveN" placeholder="Ne rien rentrer si tu ne veux pas le modifier">
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
					<label for="Register">Pseudo :</label>
					<input type="charset" class="form-control" name="PseudoEleve" id="PseudoEleve" value ="<?php echo $Users[0]->PseudoEleve; ?>" placeholder="<?php echo $Users[0]->PseudoEleve; ?>">
				</div>
				<div class="form-group">
					<label for="Register">Classe :</label>
					<input type="charset" class="form-control" name="Classe" id="Classe" value ="<?php echo $Users[0]->IdAnnee; ?>" placeholder="<?php echo $Users[0]->IdAnnee; ?>">
				</div>
				<?php }?>
				<div class="row">
					<button type="submit" href="<?php echo site_url('Users/update') ?>"class="btn btn-success" value="save">Enregistrer</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>