/**
 * Created by luizfernandosanches on 31/08/16.
 */


$(function (){
    //$('#code').click(function () {
    //    Quagga.init({
    //        inputStream: {
    //            name: "Live",
    //            type: "LiveStream",
    //            constraints: {
    //                width: 640,
    //                height: 480,
    //                facing: "environment"
    //            }
    //        },
    //        locator: {
    //            patchSize: "medium",
    //            halfSample: true
    //        },
    //        numOfWorkers: 4,
    //        locate: true,
    //        decoder : {
    //            readers: ["code_128_reader", "ean_reader"]
    //        }
    //    }, function() {
    //        Quagga.start();
    //    });
    //
    //    Quagga.onDetected(function(result) {
    //        var code = result.codeResult.code;
    //        alert('codigo = ' + code);
    //        $('#code').val(code);
    //        Quagga.stop();
    //    });
    //});
    $('#redirectCustomer').click(function () {
        window.location = '/cliente';
    });

    $('#btn_code').submit(function () {
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

            if(e == null)
            {
                $('#myModalLabel').html('Atenção');
                $('#modalText').html('O código '+ code + ' não está cadastrado na base de dados');
                $('#myModal').modal('show');
            }

             else
             {
                 var balance = parseFloat(e.currentBalance);

                 $('#id').val(e.id);
                 $('#name').html('<strong>Nome: </strong>' + e.name);
                 $('#cpf').html('<strong>CPF: </strong>' + e.cpf);
                 $('#balance').html('<strong>'+balance.toFixed(2)+'</strong>');
                 $('#block').show();
             }
            //else if(e.planB == code){
            //     $('#id').val(e.id);
            //     $('#name').html('<strong>Nome: </strong>' + e.name);
            //     $('#cpf').html('<strong>CPF: </strong>' + e.cpf);
            //     $('#balance').html('<strong>'+ e.currentBalance+'</strong>');
            //     $('#block').show();
            //}

        });

        request.fail(function (e) {
            console.log('fail');
            console.log(e);
        });

        return false;
    });

    $('#money').change(function () {
       var money = $('#money').val();

        if(money > 0)
        {
            $('#btnAddCredit').attr('disabled', false);
        }
        else if(money < 1 || !money){
            $('#btnAddCredit').attr('disabled', true);
        }
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
                    var balance = parseFloat(e.toFixed(2));

                    $('#myModalLabel').html('Sucesso');
                    $('#modalText').html('A quantia de ' + $('#money').val() + ' foi adicionada com sucesso');
                    $('#myModal').modal('show');
                    $('#balance').html('<strong>'+ balance.toFixed(2)+'</strong>');
                }
                else{
                    $('#myModalLabel').html('Atenção');
                    $('#modalText').html('O crédito não pode ser realizado');
                    $('#myModal').modal('show');
                }
            });

            request.fail(function (e) {
                console.log('fail');
                console.log(e);
            });


        }
        else {
            $('#modalText').html('Selecione um cliente antes de adicionar crédito');
            $('#myModal').modal('show');
        }

        return false;
    })
});
