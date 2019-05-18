<link rel="stylesheet" href="/ProjetWeb/application/assets/Ranking.css">
</head>
<body>
<div class="container">
  <h2>Tes Paris</h2>  
  <div class="row">       
    <table class="table">
        <thead>
        <tr>
            <th>Examen</th>
            <th>Créateur</th>
            <th>Date</th>
            <th>Aperçu</th>
            <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
          <?php 
            if ($games){
              foreach($games as $game){
            ?>
            <tr>
            <td><?php echo $game->IdDevoir; ?></td>
            <td><?php echo $game->PseudoEleve; ?></td>
            <td><?php echo $game->Date; ?></td>
            <td><a href="<?php echo base_url("Overviews/history/" . $game->IdPartie);?>"> aperçu </a></td>
            <td><a href="addUgames"> modifier </a></td>
            </tr>
        </tbody>
        <?php 
            }
              }
        ?>
     </table>
     <div class="form-group">
      <a type="submit" class="btn" href="<?php echo site_url('/')?>">Retour</a>
    </div>
   </div>
</div>
</body>
</html>
