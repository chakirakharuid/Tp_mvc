<?php 

if (isset($_SERVER['PATH_INFO'])==false || ($_SERVER['PATH_INFO'])== "/acceuil"){
  include __DIR__.'/../src/controller/acceuilController.php';
  acceuil();
} else if ($_SERVER['PATH_INFO'] == "/deposer_annonce") {

    include __DIR__ . '/../src/controller/annoncesController.php';
    creation_annonce();

} else if ($_SERVER['PATH_INFO'] == "/enregistrer_annonce") {

    include __DIR__ . '/../src/controller/annoncesController.php';
    annonce();


  } else if ($_SERVER['PATH_INFO'] == "/annonces") {

  include __DIR__ . '/../src/controller/annoncesController.php';
  afficher_annonce();

} else if ($_SERVER['PATH_INFO'] == "/favoris") {

  include __DIR__ . '/../src/controller/favorisController.php';
  favoris();

}








?>