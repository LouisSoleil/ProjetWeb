<link rel="stylesheet" href="<?php echo base_url('assets/Game.css')?>">
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
           <form class ='form-inline 'method ="post" action ="<?php echo site_url('Games/create1')?>">
            <?php if($years) {?>
            <div class="form-group">
              <input type="charset" class="form-control" name="IdAnnee" id="IdAnnee" value ="<?php echo $years ?>" >
              <?php }?>
            </div>
            <div class="form-group">
                <input type="charset" class="form-control" name="IdMatiere" id="IdMatiere" value="<?php echo $subjects ?>"></option>
            </div>
            <select class="form-control" name="IdDevoir" id="IdDevoir" value="<?php echo $final->IdDevoir; ?>">
              <?php foreach($finals as $final) { ?>
              <option name="IdDevoir" id="IdDevoir" value="<?php echo $final->IdDevoir; ?>"><?php echo $final->IdDevoir; ?></option>
              <?php } ?>
            </select>
            <div class="form-group">
              <input type="date" class="form-control" name="Date" id="Date" min ="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>"></option>
            </div>
              <div class="form-group">
                <button type="submit" class="btn" value="save">Valider</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</body>
</html>