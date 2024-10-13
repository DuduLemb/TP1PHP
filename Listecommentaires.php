<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commentaires</title>
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
        $requete = "SELECT * FROM commentaire ORDER BY id DESC";
        //Execution de la requete
        $result = mysqli_query($connexion,$requete);
    ?>
    <table class="table table-hover">
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>message</td>
            <td>Action1</td>
            <td>Action2</td>
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
        ?>
    </table>
    <a href="index.php" class="btn btn-warning">Ajouter un autre commentaire</a>
</body>
</html>