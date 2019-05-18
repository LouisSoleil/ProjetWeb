<link rel="stylesheet" href="/ProjetWeb/application/assets/Ranking.css">
</head>

<body>
<div class="container">
	<h2>Tes Paris</h2>         
	<table class="table">
    	<thead>
			<tr>
        	<th>Examin</th>
        	<th>Créateur</th>
          <th>Date</th>
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
          <td><a href="#">modifier</a></td>
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