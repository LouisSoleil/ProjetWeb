<link rel="stylesheet" href="<?php echo base_url('assets/Register.css')?>">
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
					<label for="Register">Email :</label>
					<input type="email" class="form-control" name="EmailEleve" id="EmailEleve" placeholder="Entre ton mail">
				</div>
				<div class="form-group">
					<label for="Register">Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleve" id="MDPEleve" placeholder="Entre ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Confirmation Mot de passe :</label>
					<input type="password" class="form-control" name="MDPEleve2" id="MDPEleve2" placeholder="Entre à nouveau ton mot de passe">
				</div>
				<div class="form-group">
					<label for="Register">Nom :</label>
					<input type="charset" class="form-control" name="NomEleve" id="NomEleve" placeholder="Entre ton nom">
				</div>
				<div class="form-group">
					<label for="Register">Prénom :</label>
					<input type="charset" class="form-control" name="PrenomEleve" id="PrenomEleve" placeholder="Entre ton prénom">
				</div>
				<div class="form-group">
					<label for="Register">Pseudo :</label>
					<input type="charset" class="form-control" name="PseudoEleve" id="PseudoEleve" placeholder="Entre ton pseudo">
				</div>
				<div class="form-group">
					<label for="Register">Classe :</label>
					<input type="charset" class="form-control" name="IdAnnee" id="IdAnnee" placeholder="Entre ta classe (ex : IG3)">
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