<?php
function getConnexion(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'partinformatique';

    $connexion = mysqli_connect($host, $user, $password, $dbname);
    return $connexion;
}
function executeSQL($sql){
    $execution = mysqli_query(getConnexion(), $sql);
    return $execution; //0 ou 1 (INSERT UPDATE DELETE)
                    //collection d' objet SELECT
}