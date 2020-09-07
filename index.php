<?php

$dia = date("d");

$mes = date("m");

$ano = date("Y");

printf("%04d%04d%04d", $dia, $mes, $ano);

?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .error {
            color: red !important;
        }
    </style>
</head>

<body>
    <nav style="background-color: #4d91ea;">
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title blue-grey-text text-darken-2 center-align">
                            <h4>Cadastrar Pessoa</h4>
                        </span>

                        <div class="row">

                            <form id="form-pessoa" action="script.php" method="post" class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <!-- <i class="material-icons prefix">qr_code_2</i> -->
                                        <input id="icon_prefix" name="codigo" type="text" class="validate">
                                        <label for="icon_prefix"> Código</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <!-- <i class="material-icons prefix">account_circle</i> -->
                                        <input id="icon_prefix" name="nome" type="text" class="validate">
                                        <label for="icon_prefix"> Nome</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s6">
                                        <!-- <i class="material-icons prefix">phone</i> -->
                                        <input id="icon_telephone" name="telefone" type="tel" class="validate">
                                        <label for="icon_telephone">Telefone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <!-- <i class="material-icons prefix">date_range</i> -->
                                        <select>
                                            <option value="" disabled selected>Faixa etária</option>
                                            <option value="1">Até 10 anos</option>
                                            <option value="2">Entre 10 e 15</option>
                                            <option value="3">Entre 15 e 20</option>
                                            <option value="4">Entre 20 e 30</option>
                                            <option value="5">Acima de 30 anos</option>
                                        </select>
                                        <!-- <label>Materialize Select</label> -->
                                    </div>
                                </div>
                                <button class="waves-effect waves-light btn" style="background-color: #4d91ea;" type="submit" value="Enviar">Cadastrar</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        M.AutoInit();
        // $(document).ready(function() {
        //     validator = $("#form-pessoa").validate({
        //         rules: {
        //             codigo: {
        //                 required: true,
        //                 minlength: 10
        //             },
        //             nome: {
        //                 required: true,
        //                 minlength: 5
        //             },
        //             numero: {
        //                 required: true,
        //                 minlength: 11,
        //                 maxlength: 14
        //             }
        //         },

        //         messages: {
        //             codigo: {
        //                 required: "Por favor preencha o campo Código",
        //                 minlength: "O Campo nome deve ter no minimo 10 caracteres"
        //             },
        //             nome: {
        //                 required: "Por favor preencha o campo Nome",
        //                 minlength: "O Campo nome deve ter no minimo 5 caracteres"
        //             },
        //             numero: {
        //                 required: "Por favor preencha o campo Numero",
        //                 minlength: "O Campo número deve ter no mínimo 11 caracteres",
        //                 maxlength: "O Campo número deve ter no máximo 14 caracteres"
        //             }
        //         },
        //         errorElement: 'div',
        //         errorPlacement: function(error, element) {
        //             var placement = $(element).data('error');
        //             if (placement) {
        //                 $(placement).append(error)
        //             } else {
        //                 error.insertAfter(element);
        //             }
        //         }
        //     });
        // });
    </script>
</body>

</html>