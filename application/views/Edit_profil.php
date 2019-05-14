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
				<div class="form-group">
					<label for="Register">Numéro étudiant :</label>
					<input type="int" class="form-control" name="NumEleve" value="<?php echo $row->NumEleve ?>" placeholder="Entre ton numéro étudiant">
				</div>
				<div class="form-group">
					<label for="Register">Email :</label>
					<input type="email" class="form-control" name="EmailEleve" value="<?php echo $row->EmailEleve ?>" placeholder="Entre ton mail universitaire">
				</div>
				<div class="form-group">
					<label for="Register">Ancien mot de passe :</label>
					<input type="charset" class="form-control" name="MDPEleve" placeholder="Entre ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register"> Nouveau mot de passe :</label>
					<input type="charset" class="form-control" name="MDPEleveN" placeholder="Entre ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Confirmation nouveau mot de passe :</label>
					<input type="charset" class="form-control" name="MDPEleveN2" placeholder="Entre à nouveau ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Nom :</label>
					<input type="charset" class="form-control" name="NomEleve" value="<?php echo $row->NomEleve ?>"placeholder="Entre ton nom">
				</div>
				<div class="form-group">
					<label for="Register">Prénom :</label>
					<input type="charset" class="form-control" name="PrenomEleve" value="<?php echo $row->PrenomEleve ?>"placeholder="Entre ton prénom">
				</div>
				<div class="form-group">
					<label for="Register">Pseudo :</label>
					<input type="charset" class="form-control" name="PseudoEleve" value="<?php echo $row->PseudoEleve ?>" placeholder="Entre ton pseudo">
				</div>
				<div class="form-group">
					<label for="Register">Classe :</label>
					<input type="charset" class="form-control" name="IdAnnee" value="<?php echo $row->IdAnnee ?>"placeholder="Entre ta classe (ex : IG3)">
				</div>
				<div class="row">
					<button type="submit" class="btn btn-success" value="save">Enregistrer</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>