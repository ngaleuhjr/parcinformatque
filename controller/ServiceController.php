<?php
    require_once '../model/DB.php';
    require_once '../model/ServiceDao.php';
    //pour l' ajout 
    if(isset($_POST['ajoutservice'])){
    extract($_POST);
    addService($noms, $ports, $etats, $idserv);
    $base_url =  "http://localhost/mes_projets/partInformatique/";
    header("location: $base_url?page=listeservice");
   } 
   //pour la suppresion
   if(isset($_GET['ids'])) {
       deleteService($_GET['ids']);
       $base_url =  "http://localhost/mes_projets/partInformatique/";
       header("location: $base_url?page=listeservice");
   }
   //pour la modification
   if(isset($_POST['modifierservice'])){
       // pour la recuperation de donnees
       extract($_POST);
     
       //pour la mise a  jour
       updateService($ids, $noms, $ports, $etats, $idserv );
       // retour vers la  liste
       $base_url =  "http://localhost/mes_projets/partInformatique/";
       header("location: $base_url?page=listeservice");
   }
?>
