<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />

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
                            <form action="script.php" method="post" class="col s12">

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="codigo" name="codigo" type="text" class="validate" />
                                        <label for="codigo"> Código</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="nome" name="nome" type="text" class="validate" />
                                        <label for="nome"> Nome</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="telefone" name="telefone" type="tel" class="validate">
                                        <label for="telefone">Telefone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="faixa_etaria">
                                            <option value="" disabled selected>Faixa etária</option>
                                            <option value="Até 10 anos">Até 10 anos</option>
                                            <option value="Entre 10 e 15">Entre 10 e 15</option>
                                            <option value="Entre 15 e 20">Entre 15 e 20</option>
                                            <option value="Entre 20 e 30">Entre 20 e 30</option>
                                            <option value="Acima de 30 anos">Acima de 30 anos</option>
                                        </select>
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