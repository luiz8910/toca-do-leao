/**
 * Created by luizfernandosanches on 31/08/16.
 */


$(function (){



    $('#productCode').change(function () {
        productId = $('#productId').val();
        var code = $('#productCode').val();
        alert(productId);

        var request = $.ajax({
            method: 'post',
            url: 'product/show/' + code,
            data: code,
            dataType: 'json'
        });

        request.done(function (e) {
            console.log('done');

            if(e.code == code)
            {
                $('#productId').val(e.id);
                $('#productName').val(e.name);
                $('#productValue').val(e.value);
                //$('#total').html('<strong>'+ e.currentBalance+'</strong>');
            }
            //else if(e.planB == code){
            //    $('#productId').val(e.id);
            //    $('#productName').val(e.name);
            //    $('#productValue').val(e.value);
            //}
            else{
                $('#myModalLabel').html('Atenção');
                $('#modalText').html('O código '+ code + ' não está cadastrado na base de dados');
            }
        });

        request.fail(function (e) {
            console.log('fail');
            console.log(e);
        });


    });


    $('#addProduct').click(function(){

        var qtde = $('#qtde').val() ?  $('#qtde').val() : 1.00;
        var total = parseFloat($('#productValue').val()) * parseFloat(qtde);

        productId = document.getElementById('productId').value;

       var table = '<tr id='+'tr'+productId+'>';
            table += '<td>'+$('#productName').val()+'</td>';
            table += '<td>'+$('#productValue').val()+'</td>';
            table += '<td>'+qtde+'</td>';
            table += '<td id='+'value'+productId+'>'+total.toFixed(2)+'</td>';
            table += '<td class="text-center">';
            table += '<button type="button" class="btn btn-labeled btn-danger"  onclick="excluir('+productId+')" id='+productId+' style="width: 38px !important;" >';
            table += '<span class="btn-label">';
            table += '<i class="glyphicon glyphicon-remove"></i>';
            table += '</span></button></td></tr>';

        $('#table tbody').append(table);
        $('#qtde').val(null);


        var value = parseFloat($('#total').text());
        value += parseFloat(total);
        $('#total').html(value.toFixed(2));

        return false;
    });

    $('#removeItem').click(function(){
        var itemValue = parseFloat($('#value'+productId).text());

        var value = parseFloat($('#total').text());
        value -= itemValue;
        $('#total').html(parseFloat(value));

        $('#tr'+productId).remove();
    });



    $('#sell').submit(function () {
        var id = $('#id').val();
        var total = $('#total').text();
        var balance = $('#balance').text();



        if(id)
        {
            if(total > 0)
            {
                if(parseFloat(total) > parseFloat(balance))
                {
                    $('#sellModalText').html('O valor da compra é maior que o saldo disponível');
                    $('#sellModal').modal('show');
                }
                else
                {
                    var request = $.ajax({
                        method:'POST',
                        url:'customer/sell/'+id+'-'+total,
                        data: total,
                        dataType:'json'
                    });

                    request.done(function (e) {
                        console.log('done');

                        window.location = '/';
                    });

                    request.fail(function(e){
                        console.log('fail');
                        console.log(e);
                    });
                }

            }
            else{
                $('#sellModalText').html('Selecione pelo menos um produto');
                $('#sellModal').modal('show');
            }

        }
        else{
            $('#sellModalText').html('Não há clientes selecionados');
            $('#sellModal').modal('show');
        }

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
