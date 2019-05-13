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
          if ($students){
            foreach($students as $student){
          ?>
      		<tr>
        	<td>1</td>
        	<td><?php echo $student->PseudoEleve; ?></td>
        	<td><?php echo $student->LibelleAnnee; ?></td>
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