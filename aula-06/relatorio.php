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

<?php

$con = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

$resultados = $con->query("SELECT * FROM livros");
?>

<body>
    <nav style="background-color: #4d91ea;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">CRUD LIVROS</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Cadastrar</a></li>
                <li><a href="relatorio.php">Relatório</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title blue-grey-text text-darken-2 center-align">
                            <h4>Relatório de Livros </h4>
                        </span>

                        <div class="row">
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>

                                <?php foreach ($resultados as $resultado) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $resultado['id'] ?></td>
                                            <td><?php echo $resultado['titulo'] ?></td>
                                            <td><?php echo $resultado['autor'] ?></td>
                                            <td><?php echo $resultado['descricao'] ?></td>
                                            <td>
                                                <a href="" class="waves-effect orange btn"><i class="material-icons ">edit</i></a>
                                                <a href="delete.php?id=<?php echo $resultado['id'] ?>" class="waves-effect red btn"><i class="material-icons ">delete</i></a>

                                            </td>

                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
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