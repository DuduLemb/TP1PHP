<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Informations generales</title>
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
        $requete = "SELECT * FROM infogenerale ORDER BY id DESC";
        //Execution de la requete
        $result = mysqli_query($connexion,$requete);
    ?>
    <table class="table table-hover">
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>datenaissance</td>
            <td>lieunaissance</td>
            <td>diplome</td>
            <td>anneeobtention</td>
            <td>mention</td>
            <td>actions</td>
        </tr>
        <?php
        while ($donnee = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>";
                        echo $donnee ["id"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["nom"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["prenom"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["datenaissance"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["lieunaissance"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["diplome"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["anneeobtention"];
                    echo "</td>";
                    echo "<td>";
                        echo $donnee ["mention"];
                    echo "</td>";
                    echo "<td>";
                        echo "<a href = 'updateInfogenerales.php?id=".$donnee['id']."' class='btn btn-info'>Supprimer</a>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
</body>
</html>