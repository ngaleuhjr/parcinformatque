<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
        <div style="width: 450px;margin-top: 16px;margin-left: 770px;">
        <form method="GET" action="">
            <div class="input-group">
                <input type="hidden" name="page" value="listeservice">
                <input name="motcle" id="btn-input" type="text" class="form-control input-sm-4" placeholder="saisir le nom du serveur a rechercher ici">
                <span class="input-group-btn">
                  <input type="submit" class="btn btn-primary btn-md" id="btn-chat" value="rechercher"> 
                </span>
            </div>
            </form>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des services</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Identifiant du service</td>
                            <td>Nom du services</td>
                            <td>Port du service</td>
                            <td>Etat du service</td>
                            <td>Serveur</td>
                            <td>Action</td>
                            <td>Action</td>

                        </tr>
                            <?php
                                while($service = mysqli_fetch_row($liste)){
                                echo "<tr>
                                        <td>$service[0]</td>
                                        <td>$service[1]</td>
                                        <td>$service[2]</td>    
                                        <td>$service[3]</td> 
                                        <td>$service[4]</td> 
                                        <td><a href='?page=editservice&id=$service[0]'>Editer</a></td>    
                                        <td><a href='controller/ServiceController.php?id=$service[0]'>Supprimer</a></td>    
                                    </tr>";

                                } 
                        ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>