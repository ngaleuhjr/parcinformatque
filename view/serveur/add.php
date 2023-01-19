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
            <div class="panel-heading">Formulaire d'ajout des serveurs</div>
            <div class="panel-body">
                 <form method="POST" action="controller/ServeurController.php">
                     <div class="form-group">
                            <label class="control-label">Nom du serveur</label>
                            <input class="form-control" type="text" name="nom"/>
                     </div>
                     <div class="form-group">
                            <label class="control-label">Adresse ip du serveur</label>
                            <input class="form-control" type="text" name="adrip"/>
                     </div>
                     <div>
                         <input class="btn btn-success" type="submit" value="Envoyer" name="ajoutserveur"/>
                         <input class="btn btn-danger" type="reset" value="Annuler" name="annuler"/>
                     </div>
                 </form>
                 
                        
            </div>
        </div>
    </div>
</body>
</html>