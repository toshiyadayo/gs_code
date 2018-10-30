$('input[type=radio]').change(function() {

    if($('input[name=first]:checked').val() === 'msg') {
        $('textarea[name=msg]').show();
    }

});