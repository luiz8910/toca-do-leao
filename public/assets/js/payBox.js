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

             if(e.barCode == code)
             {
                 $('#id').val(e.id);
                 $('#name').html('<strong>Nome: </strong>' + e.name);
                 $('#cpf').html('<strong>CPF: </strong>' + e.cpf);
                 $('#balance').html('<strong>'+ e.currentBalance+'</strong>');
                 $('#block').show();
             }
            else if(e.planB == code){
                 $('#id').val(e.id);
                 $('#name').html('<strong>Nome: </strong>' + e.name);
                 $('#cpf').html('<strong>CPF: </strong>' + e.cpf);
                 $('#balance').html('<strong>'+ e.currentBalance+'</strong>');
                 $('#block').show();
            }
            else{
                 $('#myModalLabel').html('Atenção');
                 $('#modalText').html('O código '+ code + 'não está cadastrado na base de dados');
             }
        });

        request.fail(function (e) {
            console.log('fail');
            console.log(e);
        });

        return false;
    });

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
