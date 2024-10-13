<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIER</title>
</head>
<body>
    <?php
         //on stocke les identifiants de la base de données
         $database = "test1";
         $username = "root";
         $password = "";
         $servername = "localhost";
         //connexion à la base de données
         $connexion = mysqli_connect($servername,$username,$password);
         //selection de la base de données
         mysqli_select_db($connexion,$database);
         //La requete de selection
        $requete = "SELECT * FROM commentaire WHERE id =".$_GET["id"].";";
        //Execution de la requete
        $result = mysqli_query($connexion,$requete);
        $donnee = mysqli_fetch_array($result);
    ?>
    <div class="row">
        <div class="col-md-2">
               
        </div>
        <div class="col-md-8">
            <form action="save_update.php" class="form" method="post">
                <label>Nom</label>
                <input type="text" class=" form-control" name="nom" 
                value= <?php
                            echo $donnee["nom"];    
                        ?>  ><br>   
                <label>Commentaire</label>
                <textarea class=" form-control" name="commentaire" 
                 ><?php
                            echo $donnee["message"];
                        ?></textarea><br>
                <button class="btn btn-info" type="submit">Modifier</button>
                <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
                <a href="InfoGenerales.php" class="btn btn-warning">Afficher les Informations generales</a>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</body>
</html>