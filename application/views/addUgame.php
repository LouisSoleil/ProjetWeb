<link rel="stylesheet" href="<?php echo base_url('assets/Register.css')?>">
</head>
<body>
	<div class ="container">
		<div class ="row">
			<div class="col-sm-12">
				<h2>Ajouter des Joueur</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12"> 
				<form class ='form-inline' method ="post" action ="<?php echo site_url('MyGames/add')?>">
				<div class="form-group" id="add">
					<label for="add">Pseudo :</label>
					<input type="charset" class="form-control" name="PseudoEleve" id="PseudoEleve" placeholder="Pseudo du Joueur">
				</div>
				<div class="form-group" id="add">
					<label for="add">Note Estimée :</label>
					<input type="float" class="form-control" name="NoteEstimée" id="NoteEstimée" placeholder="Note Estimée">
				</div>
				<div class="form-group" id="add">
					<label for="add">Note Finale :</label>
					<input type="float" class="form-control" name="NoteFinale" id="NoteFinale" placeholder="Note Finale">
				</div>
				<div class="row" id="btn">
					<button type="submit" class="btn btn-success" value="save">Enregister</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>