new WOW().init();

$(function(){
    $("#contact").submit(function(event){
        var nom        = $("#nom").val();
        var sujet      = $("#sujet").val();
        var email      = $("#email").val();
        var message    = $("#message").val();
        var dataString = nom + sujet + email + message;
        var msg_all    = "Merci de remplir tous les champs";
        var msg_alert  = "Merci de remplir ce champs";

        if (dataString  == "") {
            $("#msg_all").html(msg_all);
        } else if (nom == "") {
            $("#msg_nom").html(msg_alert);
        } else if (sujet == "") {
            $("#msg_sujet").html(msg_alert);
        } else if (email == "") {
            $("#msg_email").html(msg_alert);
        } else if (message == "") {
            $("#msg_message").html(msg_alert);
        } else {
            $.ajax({
                type : "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success : function() {
                    $("#msgConfirm").text("Le message a bien été envoyé");
                },
                error: function() {
                    $("#msgConfirm").text("Le message a bien été envoyé");
                }
            });
        }

        return false;
    });
});

// fonction pour vider les champs du formulaire
      $(function(){
      $(':input','#contact')
         .not(':button, :submit, :reset, :hidden')
         .val('')
         .removeAttr('checked')
         .removeAttr('selected');
});
