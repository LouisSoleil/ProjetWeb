<link rel="stylesheet" href="/ProjetWeb/application/assets/Game.css">
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
            <form class="form-inline" action ="<?php echo site_url('Games/create')?>">
              <select class="form-control">
                <option value="one">Only One</option>
                <option value="two">All in</option>
                <option value="three">Team</option>
              </select>
              <select class="form-control">
                <?php foreach($years as $year) { ?>
                  <option value="year" id="year"><?php echo $year->IdAnnee; ?></option>
                <?php }?>
              </select>
              <select class="form-control">
                <?php foreach($subjects as $subject) { ?>
                  <option value="subject" id="subject"><?php echo $subject->LibelleMatiere; ?></option>
                <?php }?>
              </select>
              <select class="form-control">
                <?php foreach($finals as $final) { ?>
                  <option value="final" id="final"><?php echo $final->LibelleDevoir; ?></option>
                  <?php }?>
              </select>
              <div class="form-group">
                  <input type='date' id="date" min="2018-05-15" ></input> 
              </div>
              <div class="form-group">
                <button type="submit" class="save">Valider</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</body>
</html>


