<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de renseignement</title>
    <style>
        h1{
            font-size: 20px;
        }
    </style>
</head>
<body>
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
            <form action="InfoGenerales.php" class="form" method="post">
                <label>Nom</label>
                <input type="text" class=" form-control" name="nom" ><br>
                <label>Prenom</label>
                <input type="text" class=" form-control" name="prenom" ><br>
                <label>Date de naissance</label>
                <input type="date" class=" form-control" name="datenaissance" ><br>
                <label>Lieu de naissance</label>
                <input type="text" class=" form-control" name="lieunaissance" ><br>   
                <label>Diplome</label>
                <select name="diplome">
                    <option value="CEP">CEP</option>
                    <option value="BEPC">BEPC</option>
                    <option value="BAC">BAC</option>
                    <option value="LICENCE">LICENCE</option>
                    <option value="MASTER">MASTER</option>
                </select><br><br>
                <label>Année obtention</label>
                <input type="text" class="form-contol" name="anneeobtention"><br><br>
                <label>Mention</label>
                <select name="mention">
                    <option value="PASSABLE">PASSABLE</option>
                    <option value="ASSEZ BIEN">ASSEZ BIEN</option>
                    <option value="BIEN">BIEN</option>
                    <option value="TRES BIEN">TRES BIEN</option>
                    <option value="EXCELLENT">EXCELLENT</option>
                </select><br><br>
                <a href="index.php" class="btn btn-warning">Ajouter un autre commentaire</a>
                <a href="commentaire.php" class="btn btn-warning">Afficher les commentaires</a>
                <button class="btn btn-info" type="submit">Afficher les Informations Generales</button>
            </form>
        </div>
        <div class="col-md-1">

        </div>
    </div>
</body>
</html>