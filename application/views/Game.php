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
            <form class="form-inline">
              <select class="form-control">
                // mode de jeu
                <option value="one">Only One</option>
                <option value="two">All in</option>
                <option value="three">Team</option>
              </select>
              <select class="form-control">
                <?php foreach($sectors as $sector){ ?>
                <option value="filiere"><?php echo $sector->LibelleFiliere; ?></option>
                <?php $s = $this->input->get('filiere'); }?>
              </select>
              <select class="form-control">
                <?php foreach($years as $year) { ?>
                  <option value="year"><?php echo $year->LibelleAnnee; ?></option>
                <?php }?>
              </select>
              <select class="form-control">
                <?php foreach($subjects as $subject) { ?>
                  <option value="year"><?php echo $subject->TypeMatiere; ?></option>
                <?php }?>
              </select>
              <select class="form-control">
                <?php foreach($finals as $final) { ?>
                  <option value="year"><?php echo $final->TypeDevoir; ?></option>
                <?php }?>
              </select>
              <button type="button" class="btn">Valider</button>
            </form>
          </div>
        </div>
    </div>
</body>
</html>