<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Bienvenue sur mon site personnel ! Vous pourrez ici découvrir qui je suis ainsi que le parcours que j'ai suivi.">
    <meta name="keywords" content="amice,baptiste,developpeur,site personnel">
    <meta name="author" content="Baptiste Amice">


    <title>Baptiste Amice</title>

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--
    <link rel="stylesheet" href="lib/font-awesome.min.css">
    -->

<script src="lib/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
  //tooltip
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()})
</script>

    
  </head>

<?php
require('models/model.php');
?>


  
  <body>

    

<header>
<?php
require('controllers/Menu.php');
?>
</header>

<main>
<?php
require('controllers/Accueil.php');
require('controllers/Formation.php');
require('controllers/Competences.php');
require('controllers/Projets.php');
require('controllers/Experiences.php');
require('controllers/Loisirs.php');

require('controllers/Temp.php');
?>
</main>

<footer>
<?php
require('controllers/Contacts.php');
?>
</footer>

</body>




