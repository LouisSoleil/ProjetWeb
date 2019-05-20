<link rel="stylesheet" href="<?php echo base_url('application/assets/Game.css');?>">
</head>

<body>
    <div class ="container">
        <div class="row"  >
          <div class="cl-sm-12">
            <h1>C'est ici qu'on joue</h1>
          </div>
        </div>
        <div class="row">
            <div class="cl-sm-12">
              <p id="pHP">Commence par remplir tous les champs puis clique sur Valider</p>
            </div>
        </div>
        <div class="row">
          <form class ='form-inline 'method ="post" action ="<?php echo site_url('Games/get_game')?>">
            <?php if($years) {?>
              <div class="form-group" >
                <input type="charset" class="form-control" name="IdAnnee" id="IdAnnee" value ="<?php echo $years[0]->idannee; ?>" >
              </div>
            <?php }?>
            <select class="form-control" name ="IdMatiere" id ="IdMatiere" value="<?php echo $year->idmatiere; ?>">
              <?php foreach($years as $year) { ?>
                <option name="IdMatiere" id="IdMatiere" value="<?php echo $year->idmatiere; ?>"><?php echo $year->idmatiere; ?></option>
              <?php }?>
            </select>
            <div class="form-group">
              <button type="submit" class="btn" value="save">Valider</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>