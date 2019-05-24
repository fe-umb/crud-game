<!doctype html>
<html lang="en">
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Escolher login · Jogo da Memória</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/s/cover/">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Referencia do Formulario-->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Importacao de Fonte Oswald-->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="css/cover.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">Jogo da Memória • UAM</h3>
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link" href=homepage.php>Home</a>
                        <a class="nav-link" href=informacoes.php>Informações</a>
                        <a class="nav-link active" href=escolherlogin.php>Escolher Login</a>
                    </nav>
                </div>
            </header>

            <main role="main" class="inner cover">

                <blockquote class="blockquote text-center">
                    <div class="titulo-cadastro">
                        Bem vindo a área de cadastro
                    </div>
                </blockquote>

                <!-- Resolucao da Cadastro de Professor -->

                <form action="../JogoMemoria/respcadprofessor.php" method="post">
                    <div class="container register">
                        <div class="row">
                            <div class="col-md-12 register-right">
                                <div class="tab-content" id="myTabContent">
                                    <h4 class="register-heading">Bem vindo, Professor!<br>Por favor, insira suas
                                        informações abaixo.</h4>
                                    <br>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" required
                                                       placeholder="Primeiro Nome" name="nome" id="nomeprof"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" required
                                                       placeholder="Último Nome" name="sobrenome" id="sobrenomeprof"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" required
                                                       placeholder="Senha" id="senhaprof" name="senha"/>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" required
                                                       placeholder="E-mail" id="emailprof" name="email"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="8" maxlength="10" class="form-control"
                                                       placeholder="R.A" name="ra" id="raprof"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" required
                                                       placeholder="Preencha a senha novamente" id="senhaprof2" onblur="verificaSenhaProfessor()"/>
                                            </div>
                                        </div>
                                        <div class="btn-cadprof">
                                            <input class="btn btn-light" id="cadprof" type="submit"
                                                   value="Cadastrar">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </form>

               

                <!-- INCORPORACAO DO JAVASCRIPT-->
                <script src="javascript/javascript.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">

                </div>
            </footer>
        </div>
    </body>

</html>