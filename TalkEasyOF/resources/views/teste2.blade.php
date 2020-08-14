<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Talk Easy</title>
    <link rel="shortcut icon" href="https://www.ufmg.br/marca/libras/images/sem_assinatura_64x64.png">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">

<style>
	body {
		font-family: 'Varela Round', sans-serif;
	}
  .container{
    text-align: center;
  }
	.form-control {
		box-shadow: none;
		border-radius: 4px;
	}
	.form-control:focus {
		border-color: #5c6ac4;
		box-shadow: 0 0 8px rgba(0,0,0,0.1);
	}


	.navbar .navbar-brand b {
		font-weight: bold;
		color: #5c6ac4;
	}

	.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
		color: #fff;
		background: #5c6ac4;
		padding-top: 8px;
		padding-bottom: 6px;
		border-radius: 4px;
		vertical-align: middle;
		border: none;
		min-width: 120px;
		margin-top: 8px;
	}

	.navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {
		color: #fff;
		outline: none;
		background: #5765c1;
	}

    .navbar .login-form label {
        color: #888;
        font-weight: normal;
    }
	.navbar .dropdown-menu.login-form {
		width: 280px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
	}


  .dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-family: vedana;
  text-align: center;
  width: 50%;
  padding: 20px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

</head>
<body>
<nav class="navbar navbar-default ">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Talk<b>Easy</b></a>
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>


	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sobre o site</a>
    <div class="dropdown-content">
  O Site Talk Easy é um projeto de conclusão de curso que foi desenvolvido com o objetivo de auxiliar crianças no aprendizado da Língua Brasileira de Sinais (LIBRAS).
    </div>
  </li>
  <li class="dropdown">
    <a href="#libras" class="dropbtn">LIBRAS</a>
    <div class="dropdown-content">
   LIBRAS significa Língua Brasileira de Sinais. É a
   língua gestual utilizada no Brasil para a comunicação
   das pessoas com deficiencia auditiva e/ou surdez.
    </div>
  </li>
      <li class="dropdown">
    <a href="#libras" class="dropbtn">Desenvolvedores</a>
    <div class="dropdown-content">
   Ana Júlia Giacomeli, Andressa Vaz, Bruno Henrique da Costa, Emelly Vitória Becker, Guilherme Novello, Luiz Paulo Grafetti Teres; estudantes do IFSC - Câmpus Xanxerê; sob orientação de: Alex Ricardo Weber, Rodrigo Soares da Silva, Sabrine Weber.
    </div>
  </li>
  <li><a href="#">Canal no YouTube</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu login-form">
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<div class="form-group">
								<label>Login</label>
								<input type="text" class="form-control" required="required">
							</div>
							<div class="form-group">
								<div class="clearfix">
									<label>Senha</label>
									<a href="#" class="pull-right text-muted"><small>Esqueceu?</small></a>
								</div>

								<input type="password" class="form-control" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login">
						</form>
					</li>
				</ul>
			</li>
			<li><a href="#" class="btn btn-primary mt-1 mb-1">Cadastrar-se</a></li>
		</ul>
	</div>
</nav>


<div class="container">
       <br>

      <img src="https://pngimage.net/wp-content/uploads/2018/06/formatura-do-abc-png.png" height="60">
                 <button type="button" class="btn btn-primary btn-lg">Alfabeto</button>
                 <br><br>
       <img src="https://s3.amazonaws.com/tinycards/image/ec7c2ecd215786223940b9dfea48866b"  height="60">
                 <button type="button" class="btn btn-primary btn-lg">Números</button>
                 <br><br>
        <img src="https://image.flaticon.com/icons/png/512/109/109232.png" height="60">
                 <button type="button" class="btn btn-primary btn-lg">Animais</button>
                 <br><br>
       <img src="https://pngimage.net/wp-content/uploads/2018/05/fabrica-de-brinquedos-png-3.png"  height="60">
                 <button type="button" class="btn btn-primary btn-lg">Brinquedos</button>
                 <br><br>
        <img src="https://i.pinimg.com/originals/88/38/b0/8838b0ac7f7be7c73e98c9881795d020.png" height="60">
                 <button type="button" class="btn btn-primary btn-lg">Cores</button>
                 <br><br>
        <img src="https://polpasefrutas.com.br/arquivos/imagens/produtos/mesa/morango.png"  height="60">
                 <button type="button" class="btn btn-primary btn-lg">Frutas</button>
                 <br><br>
       <img src="https://br.toluna.com/dpolls_images/2018/02/24/5a37a774-a120-40de-89a8-9a12ead7e15b_x365.jpg"  height="60">
                 <button type="button" class="btn btn-primary btn-lg">Cumprimentos</button>
                 <br><br>


      <form>
  <fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">Sugerir</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Deixe aqui uma sugestão de melhoria ou palavra a ser acrescentada">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </fieldset>
</form>
</div>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
