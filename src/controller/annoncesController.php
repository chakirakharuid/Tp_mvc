<?php   
function afficher_annonce(){

   include __DIR__ . '/../entity/Annonces.php';

 
   $entry = Annonces::all();


   include __DIR__ . '/../../template/vu_les_annonces.php';

}



function creation_annonce(){
   include __DIR__ . '/../../template/vu_creation.php';
}
    

function annonce(){
   if (isset($_FILES['photo'])) {
      $tmpName = $_FILES['photo']['tmp_name'];
      $name = $_FILES['photo']['name'];
      $size = $_FILES['photo']['size'];
      $error = $_FILES['photo']['error'];

      move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"] . "/img/" . $name);
   }

   include __DIR__ . '/../entity/Annonces.php';
   if ($_POST['titre'] == "") {
      $erreur_titre = "<br /> - Vous n'avez pas entré de titre";
   }

   if ($_POST['message'] == "") {
      $erreur_description = "<br /> - Vous n'avez pas entré de Message";
   }


   if (($_POST['titre'] == "") || ($_POST['message'] == "") ) {

      include __DIR__ . '/../../template/vu_creation.php';
      return;
   }
   $entry = new Annonces;
   $entry->titre = $_POST['titre'];
   $entry->message = $_POST['message'];
   $entry->image = $name;
   $entry->save();
   $entry = Annonces::retrieveByPK($entry->id);
include __DIR__ . '/../../template/vu_annonces.php';
}