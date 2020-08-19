<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TalkEasy</title>

        <link rel="shortcut icon" href="https://www.ufmg.br/marca/libras/images/sem_assinatura_64x64.png">
        <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    </head>
    <style>
        .navbar .navbar-brand b {
		font-weight: bold;
		color: #10626d;
	    }
        h1{
        font-weight: bold;
		color: #10626d;
        text-align: center;
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-cordanav">
            <a class="navbar-brand" href="/">Talk<b>Easy</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre o site</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">LIBRAS</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Desenvolvedores
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">IFSC - Campus Xanxerê</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ana Júlia Giacomeli</a>
                    <a class="dropdown-item" href="#">Andressa Vaz</a>
                    <a class="dropdown-item" href="#">Bruno Henrique da Costa</a>
                    <a class="dropdown-item" href="#">Emelly Vitória Becker</a>
                    <a class="dropdown-item" href="#">Guilherme Novello</a>
                    <a class="dropdown-item" href="#">Luiz Paulo Grafetti Teres</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="button" id="login">Entrar</button>
                <button class="btn btn-primary my-2 my-sm-0" type="button" id="registrar">Registrar-se</button>
              </form>
            </div>
          </nav>

        <h1>Números</h1>
        <br><br>
      <div class="container">
    <div class="row">
       <div class="col-4">
       <img src="{{asset("img/numeros/zero.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero0-video">Zero</button>
                   <br><br>
       <img src="{{asset("img/numeros/um.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero1-video">Um</button>
                   <br><br>
         <img src="{{asset("img/numeros/dois.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero2-video">Dois</button>
                   <br><br>
         <img src="{{asset("img/numeros/tres.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero3-video">Três</button>
                   <br><br>
         <img src="{{asset("img/numeros/quatro.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero4-video">Quatro</button>

       </div>
       <div class="col-4">

       </div>
       <div class="col-4">
              <img src="{{asset("img/numeros/cinco.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero5-video">Cinco</button>
                   <br><br>
              <img src="{{asset("img/numeros/seis.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero6-video">Seis</button>
                   <br><br>
              <img src="{{asset("img/numeros/sete.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero7-video">Sete</button>
                   <br><br>
              <img src="{{asset("img/numeros/oito.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero8-video">Oito</button>
                   <br><br>
              <img src="{{asset("img/numeros/nove.png")}}" height="60">
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#numero9-video">Nove</button>

       </div>
    </div>
  </div>
    <!-- modal numero 0-->
    <div class="modal fade" id="numero0-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 0</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/TABuB1yQQ0w"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 1-->
    <div class="modal fade" id="numero1-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/gFDPf3ojGSQ"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 2-->
    <div class="modal fade" id="numero2-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/vFO4QvqgjZk?autoplay=1&loop=1"
                    frameborder="0" autoplay="1" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 3-->
    <div class="modal fade" id="numero3-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/ZLMYBbB8LkA"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 4-->
    <div class="modal fade" id="numero4-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/QP-nvKJyHR8"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 5-->
    <div class="modal fade" id="numero5-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/saE3UFiou_c"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 6-->
    <div class="modal fade" id="numero6-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 6</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/o17JnC8cR0o"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 7-->
    <div class="modal fade" id="numero7-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 7</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/OBvwk-d45u0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 8-->
    <div class="modal fade" id="numero8-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 8</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/w7tPbRxqAV0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal numero 9-->
    <div class="modal fade" id="numero9-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Número 9</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/o6qx432i2Gc"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


        <script>
            document.getElementById("login").onclick = function () {
                location.href = "/entrar";
            };
            document.getElementById("registrar").onclick = function () {
                location.href = "/cadastro";
            };
        </script>
        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>
</html>
