/*Script pour générer à mot de passe aléatoire à  caractères*/

$("document").ready(function(){
$("#gene").click(function(){//Au clic du bouton générer

  var chaine = 'azertyuiopqsdfghjklmwxcvbn123456789';
  var nbChar = 8;
  var mdp = '';
  var pos = 0 ;

    for (var i = 0; i < nbChar ; i++) {//Boucle 8 fois et séléctionne aléatoirement un caractère de chaine
       pos = Math.round(Math.random() * (34 - 1) + 1);
       mdp += chaine[pos];
      
    }
     $('#user_password').val(mdp);

  });

});

