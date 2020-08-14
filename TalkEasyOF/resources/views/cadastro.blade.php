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
            }
            .container{
            text-align: center;
            }
            h1{
            font-family: vedana;
            text-align: center;
            }
    </style>
    <body>
        <form>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-4">
                        <br> <br>
                    </div>

                    <div class="col-4">
                        <br>
                            <h1>Cadastro</h1>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputName">Nome</label>
                            <input type="Name" class="form-control" id="exampleInputName"
                            aria-describedby="NameHelp" placeholder="Digite seu nome completo">
                            <small id="NameHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Digite seu endereço de email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Digite sua senha">
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                    <div class="col-4">
                    <br> <br>
                    </div>

                </div>
            </div>
        </form>

        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>

    </body>
</html>
