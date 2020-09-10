﻿<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="css/imgs/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="https://www.google.com/intl/pt-BR/chrome/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Você está usando um browser antigo. Para obter uma navegação mais rápida e segura, faça o download de graça!"></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Carregado...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header" style="position: fixed !important;">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                  <div class="rd-navbar-nav-wrap" id="div_menu">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Postar</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Início</a>
                      </li>
                      <a class="rd-nav-link" href="#login" id="scroll" hidden>Início</a>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section-lg bg-default" id="blog">
        <div class="container wow-outer">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="login.php" id="formulario" method="post">
							<div align="center" style="padding-bottom: 30px;">
								<h2>Login</h2>
							</div>
							<p></p>
							<label class="branco">Usuário</label>
							<input class="form-control" id="usuario" name="usuario">
							<label class="branco">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha">
							<label id="erro1" class="vermelho" hidden>Preencha todos os campos!</label>
              <label id="erro2" class="vermelho" hidden>Usuario e/ou senha incorretos!</label>
              <div class="col-xs-6">
                <input class="botao login" type="button" id="cuidadores" name="Confirmar" value="Confirmar" onclick="link(this.id)"/>
              </div>
              <div class="col-xs-6">
                <input class="botao login" type="button" id="registro" name="Registrar" value="Registrar" onclick="link(this.id)"/>
              </div>
					</form>
				</div>
			</div>
		</div>
	  </section>
	</div>
	<input id="contagem" value="0" hidden></input>
	<div class="snackbars" id="form-output-global"></div>
	<script src="js/core.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/main.js"></script>
	<script>
	document.onkeydown = fkey;

	var wasPressed = false;

	function fkey(e){
		e = e || window.event;
		if( wasPressed ) return; 

		if (e.keyCode == 116) {
		window.location.reload()
		window.scrollTo(0, 0);
		wasPressed = true;
		}else{}
		}
	</script>
</body>
</html>