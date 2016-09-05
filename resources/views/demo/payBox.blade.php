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
                <div class="col-md-12 col-sm-12">
                    <label class="control-label" for="formGroupInputLarge">Código do Cliente</label>
                    <div class="input-group form-group-lg">
                        <input type="text" class="form-control" id="code"  aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="glyphicon glyphicon-barcode"></i>
                                </span>
                    </div>
                </div> <!-- FIM DIV.COL-MD-12.COL-SM-12 -->

            </div> <!-- FIM DIV .ROW -->

            <div class="spacer-default"></div><!-- fim div spacer-default -->

            <div class="row">
                <div class="col-md-12 col-sm-12">


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

            </div> <!-- FIM DIV .ROW -->

            <div class="spacer-color-1"></div><!-- fim div spacer-default -->
        </div> <!-- FIM DIV .CONTAINER-FLUID -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <form id="addCredit" method="get">
                    <div class="col-md-10 col-sm-10">
                        <div class="form-group form-group-lg">
                            <input type="hidden" id="id">
                                <label class="control-label">Adicionar Crédito</label>
                                <div class="input-group">
                                    <span class="input-group-addon">R$</span>
                                    <input type="number" class="form-control" id="money" aria-describedby="inputGroupSuccess1Status">
                                </div>


                        </div>
                    </div> <!-- FIM DIV.COL-MD-6.COL-SM-12 -->

                    <div class="col-xs-2 col-sm-2 form-group-lg bt-ok-compra">
                        <button type="submit" id="btnAddCredit" class="btn btn-labeled btn-success btn-lg" disabled="disabled" data-toggle="modal" data-target="#myModal">
                                    <span class="btn-label">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                            Adicionar
                        </button>
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
                                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>--}}
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok!</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Modal -->
                    </div>
                </form>
            </div> <!-- FIM DIV .ROW -->
        </div> <!-- FIM DIV .CONTAINER-FLUID -->
    </section>

    <div class="spacer-default"></div><!-- fim div spacer-default -->


</main>

<footer>




</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jasny-bootstrap.js"></script>
<script src="assets/js/payBox.js"></script>


</body>
</html>