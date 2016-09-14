<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Robots | Vendas</title>

    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jasny-bootstrap.css" rel="stylesheet">

    <!-- folha de estilo customizado -->
    <link href="assets/css/cor.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- fontAwesome css -->
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="row">
                <p class="lead text-capitalize text-center text-color-1 text-header-ajust">
                    <strong>Toca Do Leão</strong>
                </p>
            </div><!-- div class .row -->
        </div><!-- div class .container -->
    </nav>

</header>


<main>
    <section>
            <div class="container">
                <div class="row">
                    <form id="btn_code">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input hidden id="id">
                            <label class="control-label" for="">Código do Cliente</label>
                            <div class="input-group form-group-lg">
                                <input type="text" id="code" class="form-control input-lg" placeholder="Entre com o código de barras ou código do cliente">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-lg" type="submit">Ok</button>
                                    </span>
                            </div>
                        </div> <!-- FIM DIV.COL-MD-12.COL-SM-12 -->
                    </form>


                </div> <!-- FIM DIV .ROW -->

                <div class="spacer-default"></div><!-- fim div spacer-default -->

                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <p class="lead text-capitalize text-left" id="name">

                        </p>

                        <p class="lead text-capitalize text-left" id="cpf">

                        </p>
                    </div> <!-- FIM DIV.COL-MD-10.COL-SM-8 -->


                    <!-- Usar esse block quando o cliente estiver com saldo suficiente -->
                    <div class="col-md-3 col-sm-4 col-xs-12 text-center box-money-full border-box-full bg-box-full" hidden id="block">
                        <div class="box">
                            <p class="lead text-capitalize font-size-1">
                                <strong>R$:</strong>
                            </p>
                            <p class="lead text-capitalize font-size-2" id="balance">

                            </p>
                        </div> <!-- FIM DIV.BOX -->
                    </div> <!-- FIM DIV.COL-MD-2.COL-SM-4.text-center.box-money-full.border-box-full.bg-box-full -->




                    {{--<!-- Usar esse block quando o cliente estiver com saldo acabando -->--}}
                    {{--<div class="col-md-3 col-sm-4 col-xs-12 text-center box-money-warning border-box-warning bg-box-warning">--}}
                        {{--<div class="box">--}}
                            {{--<p class="lead text-capitalize font-size-1">--}}
                                {{--<strong>R$:</strong>--}}
                            {{--</p>--}}
                            {{--<p class="lead text-capitalize font-size-2">--}}
                                {{--<strong>10,00</strong>--}}
                            {{--</p>--}}
                        {{--</div> <!-- FIM DIV.BOX -->--}}
                    {{--</div> <!-- FIM DIV.COL-MD-2.COL-SM-4.text-center.box-money-warning.border-box-warning.bg-box-warning -->--}}




                    {{--<!-- Usar esse block quando o cliente NAO estiver com saldo suficiente -->--}}
                    {{--<div class="col-md-3 col-sm-4 col-xs-12 text-center box-money-danger border-box-danger bg-box-danger">--}}
                        {{--<div class="box">--}}
                            {{--<p class="lead text-capitalize font-size-1">--}}
                                {{--<strong>R$:</strong>--}}
                            {{--</p>--}}
                            {{--<p class="lead text-capitalize font-size-2">--}}
                                {{--<strong>0,00</strong>--}}
                            {{--</p>--}}
                        {{--</div> <!-- FIM DIV.BOX -->--}}
                    {{--</div> <!-- FIM DIV.COL-MD-2.COL-SM-4.text-center.box-money-danger.border-box-danger.bg-box-danger -->--}}



                </div> <!-- FIM DIV .ROW -->

                <div class="spacer-color-1"></div><!-- fim div spacer-default -->
            </div> <!-- FIM DIV .CONTAINER-FLUID -->
        </section>

        <section>
            <div class="container">
                <input id="productId" hidden>
                <input id="productValue" hidden>
                    <div class="row">
                        <div class="col-md-10 col-sm-12 col-xs-12 form-group-lg">
                            <label class="control-label" for="formGroupInputLarge">Código do Produto:</label>
                            <input type="number" class="form-control" id="productCode">
                        </div> <!-- FIM DIV.COL-MD-6.COL-SM-12 -->


                        <div class="col-md-2 col-sm-6 col-xs-6 form-group-lg">
                            <label class="control-label" for="formGroupInputLarge">QTD.</label>
                            <input type="number" class="form-control" id="qtde">
                        </div>

                </div> <!-- FIM DIV .ROW -->
                <br>

                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-12 form-group-lg">
                        <label class="control-label" for="formGroupInputLarge">Nome de Produto:</label>
                        <input type="text" class="form-control" id="productName">
                    </div> <!-- FIM DIV.COL-MD-6.COL-SM-12 -->



                    <div class="col-md-2 col-sm-6 col-xs-6 form-group-lg bt-ok-compra">
                        <button type="button" class="btn btn-labeled btn-success btn-lg" id="addProduct">
                                        <span class="btn-label">
                                            <i class="glyphicon glyphicon-ok"></i>
                                        </span>
                            Adicionar
                        </button>
                    </div>
                </div> <!-- FIM DIV .ROW -->



                <div class="spacer-default"></div><!-- fim div spacer-default -->

                <div class="border-table-compra ">
                    <div class="table-responsive ajust-table-produtos bg-table-produtos">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr class="active">
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>QTD.</th>
                                    <th>Total</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div> <!-- FIM DIV .table-responsive.ajust-table-produtos -->
                </div> <!-- fim div border-table-compra -->

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Atenção</h4>
                            </div>
                            <div class="modal-body" id="modalText">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" id="removeItem" class="btn btn-primary" data-dismiss="modal">Excluir</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- Modal -->

                <div class="modal fade" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="sellModalLabel">Atenção</h4>
                            </div>
                            <div class="modal-body" id="sellModalText">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- Modal -->

            </div> <!-- FIM DIV .CONTAINER-FLUID -->
        </section>

        <div class="spacer-default"></div><!-- fim div spacer-default -->

        <section>
            <div class="container">
                <div class="row">
                    <form id="sell" method="get">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group-lg">
                                <button type="submit" class="btn btn-labeled btn-success btn-lg">
                                            <span class="btn-label">
                                                <i class="fa fa-cart-arrow-down fa-lg" aria-hidden="true"></i>
                                            </span>
                                    Fechar Compra
                                </button>
                            </div>
                            <div class="spacer-default"></div><!-- fim div spacer-default -->
                        </div> <!-- FIM DIV.COL-MD-9.COL-SM-8 -->


                        <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-12 text-center box-finalizar-venda border-finalizar-venda bg-finalizar-venda ">
                            <div class="box">
                                <p class="lead text-capitalize font-size-1">
                                    <strong>Total:</strong>
                                </p>
                                <p class="lead text-capitalize font-size-2">
                                    R$
                                </p>
                                <p class="lead text-capitalize font-size-2" id="total">
                                    0
                                </p>
                            </div> <!-- FIM DIV.BOX -->
                        </div> <!-- FIM DIV.COL-MD-3.COL-SM-4.text-center.box-money-full.border-box-full.bg-box-full -->
                    </form>
                </div> <!-- FIM DIV .ROW -->

            </div> <!-- FIM DIV .CONTAINER-FLUID -->
        </section>

</main>

<footer>




</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jasny-bootstrap.js"></script>
<script src="assets/js/payBox.js"></script>
<script src="assets/js/sales.js"></script>

<script>
    function excluir(id)
    {
        alert(id + ' produto');
        productId = id;
        console.log(productId + ' productID');
        $('#modalText').html('Deseja excluir o produto selecionado');
        $('#myModal').modal('show');
    }
</script>


</body>
</html>