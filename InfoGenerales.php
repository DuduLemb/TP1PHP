<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info generales</title>
    <style>
        h1{
            font-size: 20px;
        }
    </style>
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
        $a = $_POST["nom"];
        $b = $_POST["prenom"];
        $c = $_POST["datenaissance"];
        $d = $_POST["lieunaissance"];
        $e = $_POST["diplome"];
        $f = $_POST["anneeobtention"];
        $g = $_POST["mention"];
        $requete = "INSERT INTO infogenerale (nom,prenom,datenaissance,lieunaissance,diplome,anneeobtention,mention) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."');";
        //Execution de la requete
        $result = mysqli_query($connexion,$requete);
    ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>Fiche de Renseignement</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-1">
               
        </div>
        <div class="col-md-10">
            <table class="table table-hover">
                <tr>
                    <td>Nom</td>
                    <td><?php echo $_POST["nom"];?></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><?php echo $_POST["prenom"];?></td>
                </tr>
                <tr>
                    <td>Date de Naissance</td>
                    <td><?php echo $_POST["datenaissance"];?></td>
                </tr>
                <tr>
                    <td>Lieu de naissance</td>
                    <td><?php echo $_POST["lieunaissance"];?></td>
                </tr>
                <tr>
                    <td colspan="2">Diplomes et Informations</td>
                </tr>
                <tr>
                    <td>Dernier diplome</td>
                    <td><?php echo $_POST["diplome"];?></td>
                </tr>
                <tr>
                    <td>Annee d'obtention</td>
                    <td><?php echo $_POST["anneeobtention"];?></td>
                </tr>
                <tr>
                    <td>Mention</td>
                    <td><?php echo $_POST["mention"];?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-1">

        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-warning">Ajouter un autre commentaire</a>
                <a href="commentaire.php" class="btn btn-warning">Afficher les commentaires</a>
                <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
                <a href="ListeInfogenerales.php" class="btn btn-warning">Voir  Tous les Informations generales</a>
            </div>
        </div>
    </div>
</body>
</html>