<link rel="stylesheet" href="<?php echo base_url('application/assets/Ranking.css');?>">
</head>
<body>
<div class="container">
	<h2>Classement des meilleurs pronostiqueurs</h2>         
	<table class="table">
    	<thead>
			<tr>
        	<th>Rang</th>
        	<th>Pseudo</th>
        	<th>Classe</th>
      		</tr>
    	</thead>
    	<tbody>
        <?php 
          $cmpt = 0;
          if ($students){
            foreach($students as $student){
              $cmpt ++;
          ?>
      		<tr>
        	<td><?php echo $cmpt; ?></td>
        	<td><?php echo $student->pseudoeleve; ?></td>
        	<td><?php echo $student->idannee; ?></td>
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