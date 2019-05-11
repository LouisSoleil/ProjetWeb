<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/ProjetWeb/application/assets/Game.css">
  <link rel="stylesheet" href="/ProjetWeb/application/assets/General.css">
</head>

<style>.form-control{
  width: auto;
}

</style>
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