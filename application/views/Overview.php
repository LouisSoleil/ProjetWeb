<link rel="stylesheet" href="/ProjetWeb/application/assets/Ranking.css">
</head>

<body>
<div class="container">
	<h2><?php echo $all->?></h2>         
	<table class="table">
    	<thead>
			<tr>
        	<th>Examin</th>
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
          <td><a href="AGames">Aperçu</a></td>
          <td><a href="addUgames">Modifier</a></td>
      		</tr>
    	</tbody>
      <?php 
          }
            }
      ?>
	 </table>
</div>
</body>
</html>