/**
 * Created by luizfernandosanches on 31/08/16.
 */


$(function (){
    $('#code').change(function () {
        var code = $('#code').val();


        var request = $.ajax({
            method: 'post',
            url: 'customer/show/' + code,
            data: code,
            dataType: 'json'
        });

        request.done(function (e) {
            console.log('done');
            console.log(e);

             if(e.barCode == code)
             {
                 $('#name').val(e.name);
             }
        });

        request.fail(function (e) {
            console.log('fail');
            console.log(e);
        });

        return false;
    });
});
