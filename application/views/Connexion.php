<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="cl-sm-12">
				<h2>Connexion</h2>
			</div>
		</div>
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
				<div class="checkbox">
   		 			<label><input type="checkbox"> Se souvenir de moi</label>
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
