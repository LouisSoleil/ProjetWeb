<link rel="stylesheet" href="/ProjetWeb/application/assets/Ranking.css">
</head>

<body>
<div class="container">
  <div class="row">
	 <h2><?php echo $games[0]->IdDevoir ?></h2> 
  </div>  
  <div class="row">      
	<table class="table">
    	<thead>
			<tr>
        	<th>Pseudo</th>
        	<th>Note Estimée</th>
          <th>Note Final</th>
          <th>Différence</th>
      		</tr>
    	</thead>
    	<tbody>
        <?php 
          if ($alls){
            foreach($alls as $all){
          ?>
      		<tr>
        	<td><?php echo $all->PseudoEleve; ?></td>
        	<td><?php echo $all->NoteEstimee; ?></td>
          <td><?php echo $all->NoteFinale; ?></td>
          <td><?php echo $all->NoteFinale; ?></td>
      		</tr>
    	</tbody>
      <?php 
          }
            }
      ?>
    </table>
  </div>
    <div class ="row">
      <div class="col-sm-12">
        <h2>Ajouter des Joueurs</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12"> 
        <form class ='form-inline' method ="post" action ="<?php echo site_url('Games/invite')?>">
        <div class="form-group" id="add">
          <label for="add">Pseudo :</label>
          <input type="charset" class="form-control" name="PseudoEleve" id="PseudoEleve" placeholder="Pseudo du Joueur">
        </div>
        <div class="form-group" id="add">
          <label for="add">Note Estimée :</label>
          <input type="float" class="form-control" name="NoteEstimee" id="NoteEstimee" placeholder="Note Estimée">
        </div>
        <div class="form-group" id="add">
          <label for="add">Note Finale :</label>
          <input type="float" class="form-control" name="NoteFinale" id="NoteFinale" placeholder="Note Finale">
        </div>
        <div class="row" id="btn">
          <button type="submit" class="btn btn-success" value="save">Enregister</button>
        </div>
        </form>
        <div class="form-group">
          <a type="submit" class="btn" href="<?php echo site_url('Historics/')?>">Retour</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>