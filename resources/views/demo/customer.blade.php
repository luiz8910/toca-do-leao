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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label" for="">Código do Cliente</label>
                    <div class="input-group form-group-lg">
                        <input type="text" class="form-control"  aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                    </div>
                </div> <!-- FIM DIV.COL-MD-12.COL-SM-12 -->

            </div> <!-- FIM DIV .ROW -->

            <div class="spacer-default"></div><!-- fim div spacer-default -->

            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <p class="lead text-capitalize text-left">
                        <strong>Nome:</strong> Ana Maria Parça   <br>
                        <strong>Rg:</strong> 22.748.588.22-x     <br>
                        <strong>Idade:</strong> 22     <br>
                    </p>
                </div> <!-- FIM DIV.COL-MD-10.COL-SM-8 -->


                <!-- Usar esse block quando o cliente estiver com saldo suficiente -->
                <div class="col-md-3 col-sm-4 col-xs-12 text-center box-money-full border-box-full bg-box-full">
                    <div class="box">
                        <p class="lead text-capitalize font-size-1">
                            <strong>R$:</strong>
                        </p>
                        <p class="lead text-capitalize font-size-2">
                            <strong>100,00</strong>
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
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <label class="control-label" for="formGroupInputLarge">Código do Produto</label>
                    <div class="input-group form-group-lg">
                        <input type="text" class="form-control"  aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                    </div>
                </div> <!-- FIM DIV.COL-MD-6.COL-SM-12 -->

                <div class="col-md-2 col-sm-6 col-xs-6 form-group-lg">
                    <label class="control-label" for="formGroupInputLarge">QTD.</label>
                    <input type="number" class="form-control">
                </div>

                <div class="col-md-2 col-sm-6 col-xs-6 form-group-lg bt-ok-compra">
                    <button type="button" class="btn btn-labeled btn-success btn-lg">
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
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="active">
                            <th>Cod.</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>QTD.</th>
                            <th>Total</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">002</th>
                            <td>skoll lata</td>
                            <td>10,00</td>
                            <td>2</td>
                            <td>20,00</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-labeled btn-danger" style="width: 40px;">
                                                <span class="btn-label">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                </span>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">002</th>
                            <td>skoll lata</td>
                            <td>10,00</td>
                            <td>2</td>
                            <td>20,00</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-labeled btn-danger" style="width: 40px;">
                                                <span class="btn-label">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                </span>
                                </button>

                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div> <!-- FIM DIV .table-responsive.ajust-table-produtos -->
            </div> <!-- fim div border-table-compra -->
        </div> <!-- FIM DIV .CONTAINER-FLUID -->
    </section>

    <div class="spacer-default"></div><!-- fim div spacer-default -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group-lg">
                        <button type="button" class="btn btn-labeled btn-success btn-lg">
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
                            <strong>R$s:</strong>
                        </p>
                        <p class="lead text-capitalize font-size-2">
                            <strong>70,00</strong>
                        </p>
                    </div> <!-- FIM DIV.BOX -->
                </div> <!-- FIM DIV.COL-MD-3.COL-SM-4.text-center.box-money-full.border-box-full.bg-box-full -->
            </div> <!-- FIM DIV .ROW -->

        </div> <!-- FIM DIV .CONTAINER-FLUID -->
    </section>
</main>

<foooter>




</foooter>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jasny-bootstrap.js"></script>


</body>
</html>