<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
</head><body>
	<div class ="container">
		<div class ="row">
			<div class="col-sm-12">
				<h2>Nouveau sur le site ?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form method ="post">
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
    				<label for="exampleFormControlSelect1">Classe</label>
    				<select class="form-control" id="ClasseEleve">
				     <?php foreach($years as $year) { ?>
                  <option value="year"><?php echo $year->LibelleAnnee; ?></option>
                	<?php }?>
				    </select>
				</div>
				</form>
			</div>
		</div>
		<div class="row">
			<button type="button" class="btn btn-success" href="/ProjetWeb/application/controllers/Registers/enrol()">S'inscrire</button>
		</div>
	</div>
</body>
</html>