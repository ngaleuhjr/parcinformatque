    <?php
    if(isset($_GET['page'])){
        require_once'menu.php';
        switch ($_GET['page']) {
            case 'addserveur':
                require_once 'view/serveur/add.php';
                break;
            case 'addservice':
                require_once 'view/service/add.php';
                break;
            case 'listeserveur':
                require_once'model/DB.php';
                require_once'model/ServeurDao.php';
                $liste = listeServeur();

                if(isset($_GET['motcle'])){
                    $liste = recherche($_GET['motcle']);
                }
                require_once 'view/serveur/liste.php';
                break;
            case 'listeservice':
                require_once'model/DB.php';
                require_once'model/ServiceDao.php';
                $liste = listeService();
                require_once 'view/service/liste.php';
                break;
            case 'deleteserveur':
                break;
            case 'deleteservice':
                break;
            case 'editserveur':
                require_once'model/DB.php';
                require_once'model/ServeurDao.php';
                //recuperation du serveur dont l' id est passe en parametre
                $serveur = getServeurById($_GET['id']);
                //extraction des info du serveur recuperer
               //$ligne = ($serveur);
            //    echo $serveur;
                 $ligne = mysqli_fetch_row($serveur);
                require_once 'view/serveur/edit.php';
                break;
            case 'editservice':
                require_once 'view/service/edit.php';
                break;
        
        }
    }else{
        require_once 'menu.php';
    }