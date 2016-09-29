/*Script pour modifier le mot de passe d'un utilisateur*/

$('document').ready(function () {

    $("#modif").click(function(){
      
        $('#form_modif').css('display', 'block');
        
    });
    
    $('#modif_conf').click(function(){
        $.ajax({
            url: 'modifierPass',
            type: "POST",            
            data: 'modif_pass_actu=' + $("#modif_pass_actu").val() + '&modif_pass_new=' + $('#modif_pass_new').val() + '&modif_pass_new_conf=' + $('#modif_pass_new_conf').val() + '&username=' + $('#username').text(),
            dataType: 'text',
            success: function (data, textStatus, jqXHR) {
                alert(data);
            }

        });       
        
    });
    
});