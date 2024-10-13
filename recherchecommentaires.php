<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECHERCHE COMMENTAIRE</title>
    <script src="jquery.js"></script>
    <script src="commentaire.js"></script>
</head>
<body>
    <style>
        h1{
            font-size: 25px;
        }
    </style>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>Recherche commentaire</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <form action="recherchecommentaires.php" method="GET">
                <input type="radio" name="type_recherche" value="1">
                <label>Recherche par nom</label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="type_recherche" value="2" >
                <label>Recherche par message</label>
            </div>
            <div class="col-md-2">
                <input type="radio" name="type_recherche" value="3" >
                <label>voir tout</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="search">
            </div>
            <div class="col-md-2"></div>
        </div>
        <button class="btn btn-secondary" type="submit">Rechercher</button>
    </form>
    <a href="index.php" class="btn btn-warning">Ajouter un commentaire</a>
    <?php
        if(isset($_GET["search"])){
             //on stocke les identifiants de la base de données
            $database = "test1";
            $username = "root";
            $password = "";
            $servername = "localhost";
            //connexion à la base de données
            $connexion = mysqli_connect($servername,$username,$password);
            //selection de la base de données
            mysqli_select_db($connexion,$database);
            //Recuperer le mot que l'on recherche
            $mot = $_GET["search"];
            //preparer la requete
            if($_GET["type_recherche"] == "1"){
                $requete = "SELECT * FROM commentaire WHERE nom like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "2"){
                $requete = "SELECT * FROM commentaire WHERE message like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "3"){
                $requete = "SELECT * FROM commentaire ;";
            }
            //Execution de la requete
            $result = mysqli_query($connexion,$requete);
            //verifier le contenu de la requete
            $nombreresultat = mysqli_num_rows($result);
            if( $nombreresultat == "0"){
                echo"<h1 class='text-danger'>Not found</h1>";
            }else{
               echo" <table class='table table-hover'>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>message</td>
            <td>Action1</td>
            <td>Action2</td>
        </tr>";
    
        while ($donnee = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>";
                        echo $donnee ["id"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["nom"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["message"];
                    echo "</td>";
                    echo "<td>";
                        echo "<a href = 'updatecommentaire.php?id=".$donnee['id']."' class='btn btn-info'>Supprimer</a>";
                    echo "</td>";
                    echo "<td>";
                        echo "<a href = 'Modifiercommentaire.php?id=".$donnee['id']."' class='btn btn-info'>Modifier</a>";
                    echo "</td>";
                echo "</tr>";
            }
            echo   " </table>";
            }   
        } 
    ?>
</body>
</html>