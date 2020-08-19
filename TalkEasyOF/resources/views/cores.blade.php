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

        <h1>Cores</h1>
        <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                        <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/emojipedia/181/large-yellow-circle_1f7e1.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#amarelo-video">Amarelo</button>
                                    <br><br>
                        <img src="https://images.emojiterra.com/google/android-oreo/512px/1f535.png"  height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Azul</button>
                                    <br><br>
                        <img src="https://images.emojiterra.com/google/android-10/512px/26aa.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Branco</button>
                                    <br><br>
                        <img src="https://images.emojiterra.com/google/android-10/512px/1f7e0.png"  height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Laranja</button>
                                    <br><br>
                        <img src="https://images.emojiterra.com/google/android-10/512px/1f7e4.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Marrom</button>

                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                                <img src="https://images.emojiterra.com/mozilla/512px/26ab.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Preto</button>
                                    <br><br>
                                <img src="https://www.clker.com/cliparts/L/0/r/T/8/o/pink-circle-md.png" height="56">
                                    <button type="button" class="btn btn-primary btn-lg">Rosa</button>
                                    <br><br>
                                <img src="https://images.emojiterra.com/google/android-10/512px/1f7e3.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Roxo</button>
                                    <br><br>
                                <img src="https://images.emojiterra.com/google/android-10/512px/1f7e2.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Verde</button>
                                    <br><br>
                                <img src="https://images.emojiterra.com/google/android-10/512px/1f534.png" height="60">
                                    <button type="button" class="btn btn-primary btn-lg">Vermelho</button>
                        </div>
                    </div>
                </div>
    <!-- modal cor amarela-->
    <div class="modal fade" id="amarelo-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Amarelo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="467" height="315" src="https://www.youtube.com/embed/9zuFDzcaYrU?autoplay=1&loop=1"
                    frameborder="0" autoplay="1" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                    picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>
</html>
