<!DOCTYPE html>
<html lang="en">
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>Sou Aluno · Jogo da Memória</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" />
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/" />

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

        <!-- Importacao de Fonte Oswald-->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
        <!--Icones de Login-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous" />

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
        <link href="css/cover.css" rel="stylesheet" />
    </head>

    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">Jogo da Memória • UAM</h3>
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link" href="homepage.php">Home</a>
                        <a class="nav-link" href="informacoes.php">Informações</a>
                        <a class="nav-link" href="escolherlogin.php">Trocar Login</a>
                    </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <blockquote class="cabecalho-log-aluno">
                    <div class="titulo-login-aluno">
                        Bem vindo a área de login de alunos
                    </div>
                    <br />
                </blockquote>

                <!-- Area de Login do Usuario-->
                <div class="container">
                    <div class="d-flex justify-content-center h-100">
                        <div class="card">
                            <div class="card-body">
                                <div class="subtitulo-login-aluno">
                                    Por favor, insira suas informações abaixo!
                                </div>

                                <form action="../JogoMemoria/respconsultaaluno.php" method="post" >
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" required maxlength="100" placeholder="Insira o seu R.A aqui"  name="ra"/>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" required maxlength="20"
                                               placeholder="Insira a sua senha aqui" name="senha" />
                                    </div>
                                    <br />
                                    <div class="btn-login">
                                        <input type="submit" class="btn btn-dark" value="Entrar"></input>
                                    </div>
                                </form>


                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center links">
                                    Não possui uma conta?&nbsp;<a href="cadastroaluno.php">Cadastrar-se</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="atualizaraluno.php">Esqueceu sua Senha?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner"></div>
            </footer>
        </div>
    </body>

</html>