$("#re_mot_pass").keyup(function(){
    if($("#re_mot_pass").val()==$("#mot_pass").val()){
        $('.vert').show();
        $('.rouge').hide();
        $('#Envoyer').attr('disabled',false);
    }
    else{
        $('.vert').hide();
        $('.rouge').show();
        $('#Envoyer').attr('disabled',true);
    }
    if($("#re_mot_pass").val()==''){
        $('.rouge').hide();
        $('.vert').hide();
        $('#Envoyer').attr('disabled',true);
    }
});