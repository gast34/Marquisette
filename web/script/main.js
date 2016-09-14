// formulaire !!
  $(function(){
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 1000; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
      $("#contact").submit(function(event){
          var nom        = $("#nom").val();
          var sujet      = $("#sujet").val();
          var email      = $("#email").val();
          var message    = $("#message").val();
          var dataString = nom + sujet + email + message;
          var msg_all    = "Merci de remplir tous les champs ;)";
          var msg_alert  = "Merci de remplir ce champs ;)";

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
                      $("#contact").html("<h3>Le message a bien été envoyé :)</h3>");
                  },
                  error: function(e) {

                      $("#contact").html("<h3>Le message a bien été envoyé :)</h3>"+e.getMessage());
                  }
              });
          }

          return false;
      });
  });
