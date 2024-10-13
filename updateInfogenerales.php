<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
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
        //Requete de suppression
        $requete = "DELETE FROM infogenerale WHERE id =".$_GET['id'].";";
        //Execution de la requete
        echo "Suppression reussie";
        $result = mysqli_query($connexion,$requete);    
    ?>
    <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
    <a href="ListeInfogenerales.php" class="btn btn-warning">Voir  Tous les Informations generales</a>
</body>
</html>