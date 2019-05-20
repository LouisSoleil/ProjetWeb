<link rel="stylesheet" href="<?php echo base_url('application/assets/Ranking.css');?>">
</head>

<body>
<div class="container">
  <div class="row">
	 <h2><?php echo $games[0]->iddevoir ?></h2> 
  </div>  
  <div class="row">      
	<table class="table table-bordered">
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
        	<td><?php echo $all->pseudoeleve; ?></td>
        	<td><?php echo $all->noteestimee; ?></td>
          <td><?php echo $all->notefinale; ?></td>
          <td><?php echo $all->difference; ?></td>
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
        <h2>Modifier</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12"> 
        <form class ='form-inline' method ="post" action ="<?php echo site_url('Games/upgrade')?>">
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
          <button name="Partie" id="Partie" type="submit" class="btn" value="<?php echo ($games[0]->idpartie);?>">Modifier</button>
        </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <a type="submit" class="btn" href="<?php echo base_url('Historics/')?>">Retour</a>
              </div>
            </div>
          </div>
  </body>
  </html>
