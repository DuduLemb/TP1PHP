$(document).ready(function(){
    $("#valider").click(function(){
        var a = $("#nom").val();
        var b = $("#commentaire").val();
        $.ajax({
            type: "GET",
            url: "commentaire.php",
            data: {
                nom:a,
                commentaire:b,
            },
            dataType: "dataType",
            success: function (response) {
                alert('Enregistrement reussi');
            }
        });
    });
});