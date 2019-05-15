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
				<?php foreach($result as $row) ?>
				<div class="form-group">
					<?php echo $row->NumEleve; ?>
				</div> 
				<div class="form-group">
					<?php echo $row->EmailEleve; ?>
				</div>
				<div class="form-group">
					<?php echo $row->MDPEleve; ?>
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
					<?php echo $row->NomEleve; ?>
				</div>
				<div class="form-group">
					<?php echo $row->PrenomEleve; ?>
				</div>
				<div class="form-group">
					<?php echo $row->PseudoEleve; ?>
				</div>
				<div class="form-group">
					<?php echo $row->IdAnnee; ?>
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