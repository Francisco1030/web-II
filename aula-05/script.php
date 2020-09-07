<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
                            <h4>Olá, <?php echo $_POST["nome"]; ?> </h4>
                        </span>

                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">qr_code_2</i>
                                    <label for="icon_telephone"><?php echo $_POST["codigo"] == '' ? "Campo não informado" : $_POST["codigo"]; ?></label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <label for="icon_prefix"> <?php echo $_POST["nome"] == '' ? "Campo não informado" : $_POST["nome"]; ?> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <label for="icon_telephone"><?php echo $_POST["telefone"] == '' ? "Campo não informado" : $_POST["telefone"]; ?></label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">date_range</i>
                                    <label for="icon_telephone"><?php echo $_POST["faixa_etaria"] == '' ? "Campo não informado" : $_POST["faixa_etaria"]; ?></label>
                                </div>
                            </div>
                        </div>

                        <a href="atv.php" class="waves-effect waves-light btn" style="background-color: #4d91ea;" type="submit" value="Enviar">Voltar</a>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>