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
        body {
            font-family: 'Varela Round', sans-serif;
            background-color: whitesmoke;
        }
            .container{
            text-align: center;
        }
        h1{
            font-family: vedana;
            text-align: center;
        }
        .navbar .navbar-brand b {
            font-weight: bold;
            color: #10626d;
	    }
    </style>


      <title>Talk Easy</title>

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

      <form>
        <div class="container">
      <div class="row">
        <br>
          <div class="col-4">
            <br> <br>
          </div>


    <div class="col-4">
          <br>
          <h1>Login</h1>
          <br>


      <div class="form-group">
      <label for="exampleInputEmail1">Login</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
      <br>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </div>

    <div class="col-4">
          <br> <br>
    </div>

    </div>
    </div>
  </form>

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
