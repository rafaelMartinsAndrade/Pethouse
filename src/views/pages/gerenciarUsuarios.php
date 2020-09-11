<?php
include_once "Classes/Usuario.php";
$usuarios = new Usuarios();

if(isset($_GET["erro"])){
	$erro = $_GET["erro"];
}

if(isset($_GET["deletar"])){
	$deletar = $_GET["deletar"];
	$pagina = $_GET["deletar"];
	$del = $usuarios->deletar($deletar);
}
	
if(isset($_POST["usuario"])){
	if($_POST["usuario"] != "" && $_POST["senha"] != "" && $_POST["senha2"] != ""){
		if($_POST["senha"] == $_POST["senha2"]){
			$cad = $usuarios->cadUsuario();
		}else{
			header('location:./gerenciarUsuarios.php?erro=2');
		}
	}else{
		header('location:./gerenciarUsuarios.php?erro=1');
	}
}
$listar = $usuarios->listar();
?>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Solucione - ADM</title>
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
                <div class="rd-navbar-panel"> 
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap" id="btn_menu"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.php"><img class="brand-logo-light" src="css/imgs/logo.png" alt="" width="140" height="57"/></a></div>
                </div>
                  <div class="rd-navbar-nav-wrap" id="div_menu">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="gerenciarUsuarios.php">Usuários</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="gerenciarPosts.php">Posts</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="postar.php">Postar</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="verificar.php?sair=true?">Sair</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;css/imgs/inicio_fundo.jpeg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
			  <!-- TÍTULO -->
              <h1 class="box-default-title CoolveticaRg">Gerencie seus usuários!</input></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default" id="blog">
        <div class="container wow-outer">
			<div class="row">
				<div class="col-md-4">
					<form action="gerenciarUsuarios.php" id="formulario" method="post">
							<div align="center">
								<h2>Cadastre seu usuário!</h2>
							</div>
							<p></p>
							<label class="branco">Novo Login</label>
							<input class="form-control" id="usuario" name="usuario">
							<label class="branco">Nova Senha</label>
							<input type="text" class="form-control" id="senha" name="senha">
							<label class="branco">Confira sua senha</label>
							<input type="text" class="form-control" id="senha2" name="senha2">
							<label id="erro1" class="vermelho" hidden>Preencha todos os campos!</label>
							<label id="erro2" class="vermelho" hidden>As senhas não são iguais!</label>
							<label id="erro3" class="vermelho" hidden>Não foi possível fazer o cadastro!</label>
							<label id="erro5" class="vermelho" hidden>Usuário já existe!</label>
							<input class="botao login" type="button" id="Confirmar" name="Confirmar" value="Cadastrar" onclick="inserir($pagina = 'Usuarios')"/>
					</form>
				</div>
				<!-- CONTANDO OS POSTS -->
				<?php $i = 0;foreach ($listar as $usuarios) {$i++;}?>
				<?php if($i > 0): ?>
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<h2>Lista de Usuários</h2>
					<table class="table">
						<thead>
						<tr>
							<th>ID</th>
							<th>Usuario</th>
							<th></th>
						</tr>
						</thead>
						<tbody id="tbody">
							<?php foreach ($listar as $usuarios) : ?>
								<tr>
									<td id='tdid'><?php echo $usuarios->ID; ?></td>
									<td id='tdusuario'><?php echo $usuarios->USUARIO; ?></td>
									<td id='tdacoes'><button class='btn btn-outline-danger'onclick='deletar($pagina = "Usuarios", <?php echo $usuarios->ID; ?>)'><i class='fa fa-trash'></i></button></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<label id="erro4" class="vermelho" hidden>Não foi possivel excluir o usuário selecionado!</label>	
				<label id="erro0" class="verde" hidden>Usuário cadastrado com sucesso!</label>	
				<label id="erro6" class="verde" hidden>Usuário excluído com sucesso!</label>	
				<?php else: ?>
					<div class="col-md-12 text-center wow slideInDown">
						<h3>Nenhuma usuario foi encontrado</h3>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	  </section>
		<!-- Page Footer-->
		  <footer class="section footer-minimal context-dark">
			<div class="container wow-outer">
			  <div class="wow fadeIn">
				<div class="row row-60">
				  <div class="col-12"><a href="index.php"><img src="css/imgs/logo.png" alt="" width="140" height="57"/></a></div>
				  <div class="col-12">
					<ul class="footer-minimal-nav">
					  <li><a href="index.php">Início</a></li>
					  <li><a href="index.php#sobre">Sobre</a></li>
					  <li><a href="index.php#servicos">Serviços</a></li>
					  <li><a href="index.php#contatos">Contatos</a></li>
					  <li><a href="blog.php">Blog</a></li>
					</ul>
				  </div>
				  <div class="col-12">
					<ul class="social-list">
					  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/solucione.ufmg/" target="_blank"></a></li>
					  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
					  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
					  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
					  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
				<p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Solucione</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">Rafael Martins</a></p>
			  </div>
			</div>
		  </footer>
		</div>
		<input id="contagem" value="0" hidden></input>
		<div class="snackbars" id="form-output-global"></div>
		<script src="js/core.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/main.js"></script>
		<script>
		window.onload = menu();
		document.onkeydown = fkey;

		var wasPressed = false;

		function fkey(e){
			e = e || window.event;
		if( wasPressed ) return; 

			if (e.keyCode === 116) {
			window.location.href = "./gerenciarUsuarios.php";
			wasPressed = true;
			}
		}
		</script>
		<?php if(isset($erro)):?>
			<?php echo "<script>hidden($erro);</script>"; ?>
		<?php endif; ?>
	</body>
</html>