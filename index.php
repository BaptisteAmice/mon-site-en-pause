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
    
    

  
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    

<script src="lib/jquery.min.js"></script>
<script src="lib/popper.min.js"></script>

<script src="lib/bootstrap4.min.js"</script>


<script>
  //tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
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




