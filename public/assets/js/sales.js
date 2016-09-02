/**
 * Created by luizfernandosanches on 31/08/16.
 */


$(function (){

    $('#addCredit').submit(function () {
        var money = $('#money').val();
        var id = $('#id').val();

        if(id)
        {
            var request = $.ajax({
                method: 'POST',
                url: 'customer/addCredit/'+id+'-'+money,
                data: money,
                dataType: 'json'
            });

            request.done(function (e) {
                if (e)
                {
                    $('#myModalLabel').html('Sucesso');
                    $('#modalText').html('A quantia de ' + $('#money').val() + ' foi adicionada com sucesso');
                    $('#balance').html('<strong>'+ e+'</strong>');
                }
                else{
                    $('#myModalLabel').html('Atenção');
                    $('#modalText').html('O crédito não pode ser realizado');
                }
            });

            request.fail(function (e) {
                console.log('fail');
                console.log(e);
            });
        }
        else {
            $('#modalText').html('Selecione um cliente antes de adicionar crédito');
        }

        return false;
    })
});
