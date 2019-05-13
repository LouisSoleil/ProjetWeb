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
</html>