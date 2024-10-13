<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="jquery.js"></script>
    <script src="commentaire.js"></script>
   
</head>
<body>
    <div class="row">
        <div class="col-md-2">
               
        </div>
        <div class="col-md-8">
            <form  class="form" method="post">
                <label>Nom</label>
                <input type="text" class=" form-control" name="nom" id="nom" ><br>   
                <label>Commentaire</label>
                <textarea class=" form-control" name="commentaire" id="commentaire"></textarea><br>
                <button class="btn btn-info" type="submit" id="valider">Ajouter un Commentaire</button>
                <a href="FicheRenseignement.php" class="btn btn-warning">Aller vers la fiche de renseignement</a>
                <a href="InfoGenerales.php" class="btn btn-warning">Afficher les Informations generales</a>
                <a href="Listecommentaires.php" class="btn btn-warning">Voir  Tous les commentaires</a>
                <a href="recherchecommentaires.php" class="btn btn-warning">rechercher un commentaire</a>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</body>
</html>
