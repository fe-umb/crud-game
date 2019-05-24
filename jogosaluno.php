<!DOCTYPE html>
<html lang="en">
<!-- Erik Kaue Paroline - RA: 20960545
Fernanda Umberto - RA: 20943426
Guilherme Rodrigues - RA: 20996393
Matheus Marques - RA: 20981531
Milena Basso - RA: 20956610 -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Jogos do Aluno</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet" />

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />

        <link href="" <!-- Fonts and icons -->
              <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css" />
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">

            <div class="sidebar" data-color="gray" data-image="assets/img/sidebar-5.jpg">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="dashboardaluno.php" class="simple-text">
                            Menu
                        </a>
                    </div>

                    <ul class="nav">
                        <li>
                            <a href="dashboardaluno.php">
                                <i class="pe-7s-home"></i>
                                <p>Menu Principal</p>
                            </a>
                        </li>
                        <li>
                            <a href="useraluno.php">
                                <i class="pe-7s-user"></i>
                                <p>Meu Perfil</p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="jogosaluno.php">
                                <i class="pe-7s-joy"></i>
                                <p>Jogos</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="dashboard.php">Testes disponíveis</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="useraluno.php">
                                        <p>Meu Perfil</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="homepage.php">
                                        <p>Log out</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2 class="title">
                                            <center>Selecione um dos testes</center>
                                        </h2>
                                    </div>

                                    <!-- Conteudo dos Testes esta aqui dentro-->
                                    <div class="content">
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                        <div class="teste"
                                             style="background-image:url(https://web.opendrive.com/api/v1/download/file.json/NTlfMTMzMTc2ODdf?inline=1)">
                                            <a href="indexjogo.php"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>