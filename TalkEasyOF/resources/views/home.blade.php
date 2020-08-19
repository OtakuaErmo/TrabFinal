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

    <div class="container">
        <div class="row">
            <br>
            <div class="col-6 mt-5">
                <img src="https://pngimage.net/wp-content/uploads/2018/06/formatura-do-abc-png.png" height="60">
                    <button type="button" id="alfabeto" class="btn btn-primary btn-lg">Alfabeto</button>
                    <br><br>
                <img src="https://s3.amazonaws.com/tinycards/image/ec7c2ecd215786223940b9dfea48866b"  height="60">
                    <button type="button" id="numeros" class="btn btn-primary btn-lg" >Números</button>
                    <br><br>
                <img src="https://image.flaticon.com/icons/png/512/109/109232.png" height="60">
                    <button type="button" id="animais" class="btn btn-primary btn-lg">Animais</button>
                    <br><br>
                <img src="https://pngimage.net/wp-content/uploads/2018/05/fabrica-de-brinquedos-png-3.png"  height="60">
                    <button type="button" id="brinquedos" class="btn btn-primary btn-lg">Brinquedos</button>
                    <br><br>
                <img src="https://i.pinimg.com/originals/88/38/b0/8838b0ac7f7be7c73e98c9881795d020.png" height="60">
                    <button type="button" id="cores" class="btn btn-primary btn-lg">Cores</button>
                    <br><br>
                <img src="https://polpasefrutas.com.br/arquivos/imagens/produtos/mesa/morango.png"  height="60">
                    <button type="button" id="frutas" class="btn btn-primary btn-lg">Frutas</button>
                    <br><br>
                <img src="https://br.toluna.com/dpolls_images/2018/02/24/5a37a774-a120-40de-89a8-9a12ead7e15b_x365.jpg"  height="60">
                    <button type="button" id="cumprimentos" class="btn btn-primary btn-lg">Cumprimentos</button>
                    <br><br>

                        <form>
                            <fieldset disabled>
                                <div class="form-group">
                                <label for="disabledTextInput">Sugerir</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Você precisa estar cadastrado para sugerir uma palavra">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </fieldset>
                        </form>

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
        document.getElementById("alfabeto").onclick = function () {
            location.href = "/classe/alfabeto";
        };
        document.getElementById("numeros").onclick = function () {
            location.href = "/classe/numeros";
        };
        document.getElementById("animais").onclick = function () {
            location.href = "/classe/animais";
        };
        document.getElementById("frutas").onclick = function () {
            location.href = "/classe/frutas";
        };
        document.getElementById("brinquedos").onclick = function () {
            location.href = "/classe/brinquedos";
        };
        document.getElementById("cores").onclick = function () {
            location.href = "/classe/cores";
        };
        document.getElementById("cumprimentos").onclick = function () {
            location.href = "/classe/cumprimentos";
        };
    </script>


        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>
</html>
