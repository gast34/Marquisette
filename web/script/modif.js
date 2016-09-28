$('document').ready(function () {

    $("#modif").click(function(){
      
        $('#form_modif').css('display', 'block');
        
    });
    
    $('#modif_conf').click(function(){
        $.ajax({
            url: 'http://localhost/Marquisette/web/app_dev.php/modifierPass',
            type: "POST",            
            data: 'modif_pass_actu=' + $("#modif_pass_actu").val() + '&modif_pass_new=' + $('#modif_pass_new').val() + '&modif_pass_new_conf=' + $('#modif_pass_new_conf').val() + '&username=' + $('#username').text(),
            dataType: 'text',
            success: function (data, textStatus, jqXHR) {
                alert(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus);
            }

        });       
        
    });
    
});