<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Page D'accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/CI/application/assets/HomePage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img  src="/CI/application/JPEG/logo.gif" class="navbar-brand" href="#"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Acceuil</a></li>
        <li><a href="#">Classement</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">A propos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="col-sm-12"> 
      <h1>Bienvenue</h1>
  </div>    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-10">
      <h3>Quelle est le but du jeu ?</h3>
      <p>C'est la fin du mois et ton compte en banque cri famine ? Mais tu veux quand même sortir jeudi ?</p>
      <p>Pas de soucis, ce jeu est fait pour toi !</p>
      <p>Le but ? C'est très simple, il faut juste que tu ai un partiel qui arrive, ou n'importe quel devoir qui demande une note. Trouve toi des potes avec qui jouer et c'est partie.</p>
      <p>Avec tes potes, vous allez parier sur la note que vous allez avoir à ce devoir noté, et bien sûr tu vas avoir la note réelle. Celui qui à le plus gros écart entre la note annoncée et la note finale doit payer son coup dans le bar de votre choix.</p>
      <h3>Voici comment tu vas jouer :</h3>
      <li>Dans en premier temps tu dois t'inscrire.</li>
      <li>Ensuite, choisis ta section ainsi que ta classe ci-contre.</li>
      <li>Puis, tu rentre le nom des joueurs avec qui tu veux jouer.</li>
    </div>
    </div>
</div>

<footer>
  <span>Footer Text</span>
</footer>

</body>
</html>
