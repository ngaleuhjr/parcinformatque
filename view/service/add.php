<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Formulaire d'ajout des services</div>
            <div class="panel-body">
                 <form method="POST" action="controller/ServiceController.php">
                     <div class="form-group">
                            <label class="control-label">Nom du service</label>
                            <input class="form-control" type="text" name="noms"/>
                     </div>
                     <div class="form-group">
                            <label class="control-label">Port du service</label>
                            <input class="form-control" type="text" name="ports"/>
                     </div>
                     <div class="form-group">
                            <label class="control-label">Etat du service</label>
                            <select class="form-control"  name="etats">
                                <option value="1">Activer</option>
                                <option value="0">Desactiver</option>
                                </select>
                     </div>
                     <div class="form-group">
                            <label class="control-label">Serveur</label>
                            <select class="form-control"  name="idserv">
                                <option value="1">Faites un choix</option>
                                <?php
                                require_once 'model/DB.php';
                                require_once 'model/ServeurDao.php';
                                $liste_serveurs = listeServeur();
                                while($ligne = mysqli_fetch_row($liste_serveurs)){
                                    echo "<option value='$ligne[0]'>$ligne[1]</option>";
                                }
                                ?>
                                </select>
                     </div>
                     <div>
                         <input class="btn btn-success" type="submit" value="Envoyer" name="ajoutservice"/>
                         <input class="btn btn-danger" type="reset" value="Annuler" name="annuler"/>
                     </div>
                 </form>
                 
                        
            </div>
        </div>
    </div>
</body>
</html>