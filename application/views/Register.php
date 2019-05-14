<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
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
				<form method ="post" action ="<?php echo site_url('Users/create')?>">
				<div class="form-group">
					<label for="Register">Numéro étudiant :</label>
					<input type="int" class="form-control" name="NumEleve" placeholder="Entre ton numéro étudiant">
				</div>
				<div class="form-group">
					<label for="Register">Email :</label>
					<input type="email" class="form-control" name="EmailEleve" placeholder="Entre ton mail universitaire">
				</div>
				<div class="form-group">
					<label for="Register">Mot de passe :</label>
					<input type="charset" class="form-control" name="MDPEleve" placeholder="Entre ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Confirmation Mot de passe :</label>
					<input type="charset" class="form-control" name="MDPEleve2" placeholder="Entre à nouveau ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Nom :</label>
					<input type="charset" class="form-control" name="NomEleve" placeholder="Entre ton nom">
				</div>
				<div class="form-group">
					<label for="Register">Prénom :</label>
					<input type="charset" class="form-control" name="PrenomEleve" placeholder="Entre ton prénom">
				</div>
				<div class="form-group">
					<label for="Register">Pseudo :</label>
					<input type="charset" class="form-control" name="PseudoEleve" placeholder="Entre ton pseudo">
				</div>
				<div class="form-group">
					<label for="Register">Classe :</label>
					<input type="charset" class="form-control" name="IdAnnee" placeholder="Entre ta classe">
				</div>
				<div class="row">
					<button type="submit" class="btn btn-success" value="save">S'inscrire</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>