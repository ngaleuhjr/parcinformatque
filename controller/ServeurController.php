<?php
    require_once '../model/DB.php';
    require_once '../model/ServeurDao.php';
    //pour l' ajout 
    if(isset($_POST['ajoutserveur'])){
    $nomserveur = $_POST['nom'];
    $adripserveur = $_POST ['adrip'];
    echo $nomserveur;
    addServeur($nomserveur, $adripserveur);
    $base_url =  "http://localhost/mes_projets/partInformatique/";
    header("location: $base_url?page=listeserveur");
   } 
   //pour la suppresion
   if(isset($_GET['id'])) {
       deleteServeur($_GET['id']);
       $base_url =  "http://localhost/mes_projets/partInformatique/";
       header("location: $base_url?page=listeserveur");
   }
   //pour la modification
   if(isset($_POST['modifierserveur'])){
       // pour la recuperation de donnees
       $id = $_POST['id'];
       $nom = $_POST['nom'];
       $adrip = $_POST['adrip'];
     
       //pour la mise a  jour
       updateServeur($id, $nom, $adrip );
       // retour vers la  liste
       $base_url =  "http://localhost/mes_projets/partInformatique/";
       header("location: $base_url?page=listeserveur");
   }
?>