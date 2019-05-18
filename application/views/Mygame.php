<link rel="stylesheet" href="/ProjetWeb/application/assets/Ranking.css">
</head>

<body>
<div class="container">
	<h2>Tes Parties</h2>         
	<table class="table">
    	<thead>
			<tr>
        	<th>Examin</th>
        	<th>Créateur</th>
        	<th>Note Estimée</th>
          <th>Date</th>
          <th>modifier</th>
      		</tr>
    	</thead>
    	<tbody>
        <?php 
          if ($students){
            foreach($students as $student){
          ?>
      		<tr>
        	<td>1</td>
        	<td><?php echo $student->PseudoEleve; ?></td>
        	<td><?php echo $student->IdAnnee; ?></td>
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