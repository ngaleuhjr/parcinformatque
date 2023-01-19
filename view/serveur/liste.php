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
                <input type="hidden" name="page" value="listeserveur">
                <input name="motcle" id="btn-input" type="text" class="form-control input-sm-4" placeholder="saisir le nom du serveur a rechercher ici">
                <span class="input-group-btn">
                  <input type="submit" class="btn btn-primary btn-md" id="btn-chat" value="rechercher"> 
                </span>
            </div>
            </form>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des serveur</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Identifiant du serveur</td>
                            <td>Nom du serveur</td>
                            <td>Adresse Ip du serveur</td>
                            <td>Action</td>
                            <td>Action</td>

                        </tr>
                            <?php
                                while($serveur = mysqli_fetch_row($liste)){
                                echo "<tr>
                                        <td>$serveur[0]</td>
                                        <td>$serveur[1]</td>
                                        <td>$serveur[2]</td>    
                                        <td><a href='?page=editserveur&id=$serveur[0]'>Editer</a></td>    
                                        <td><a href='controller/ServeurController.php?id=$serveur[0]'>Supprimer</a></td>    
                                    </tr>";

                                } 
                        ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>