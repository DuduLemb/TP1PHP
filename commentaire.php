<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
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
        //preparer la requete
        $a = $_GET["nom"];
        $b = $_GET["commentaire"];
        $requete = "INSERT INTO commentaire (nom,message) VALUES ('".$a."','".$b."');";
        //Execution de la requete
        $result = mysqli_query($connexion,$requete);
    ?>
    <table class="table table-hover">
        <tr>
            <td>Nom</td>
            <td><?php echo $_GET["nom"];?></td>
        </tr>
        <tr>
            <td>Message du commentaire</td>
            <td><?php echo $_GET["commentaire"];?></td>
        </tr>
    </table>
    <a href="index.php" class="btn btn-warning">Ajouter un autre commentaire</a>
    <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
    <a href="InfoGenerales.php" class="btn btn-warning">Afficher les Informations generales</a>
    <a href="Listecommentaires.php" class="btn btn-warning">Voir  Tous les commentaires</a>
</body>
</html>