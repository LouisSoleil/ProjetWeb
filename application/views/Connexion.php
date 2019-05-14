<link rel="stylesheet" href="/ProjetWeb/application/assets/Register.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="cl-sm-12">
				<h2>Connexion</h2>
			</div>
		</div>
				<?php echo form_open('Users/login', array('class' => 'form_horizontal')) ?>
					<div class="form-group">
						<label for="Email">Ton Mail :</label>
						<?php echo form_input(array ('Email' => 'usermail', 'id' => 'Email','class' => 'form_control' )); ?>
					</div>
					<div class="form-group">
						<label for="MDP">Ton Mot de Passe :</label>
						<?php echo form_input(array ('MDP' => 'password', 'id' => 'MDP', 'class' => 'form_control' )); ?>
					</div>
				<div class="checkbox">
   		 			<label><input type="checkbox"> Se souvenir de moi</label>
  				</div>
		<div class="row">
			<button type="button" class="btn btn-success">Se connecter</button>
		</div>
		<?php form_close();?>
		<div class="row">
			<p><a href="/ProjetWeb/Registers">S'inscrire</a></p>
		</div>
	</div>
</body>
</html>
