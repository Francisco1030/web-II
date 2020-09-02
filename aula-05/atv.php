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
                            <h4>Cadastrar Pessoa</h4>
                        </span>

                        <div class="row">

                            <form action="script.php" method="post" class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" name="nome" type="text" class="validate">
                                        <label for="icon_prefix"> Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="icon_telephone" name="telefone" type="tel" class="validate">
                                        <label for="icon_telephone">Telefone</label>
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
    </script>
</body>

</html>