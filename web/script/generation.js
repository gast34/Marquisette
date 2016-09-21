$("document").ready(function(){
$("#gene").click(function(){

  var chaine = 'azertyuiopqsdfghjklmwxcvbn123456789';
  var nbChar = 8;
  var mdp = '';
  var pos = 0 ;

    for (var i = 0; i < nbChar ; i++) {
       pos = Math.round(Math.random() * (34 - 1) + 1);
       mdp += chaine[pos];
      
    }
     $('#form_Password').val(mdp);

  });

});

