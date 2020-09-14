<?php $render('header'); ?>
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
                  <div class="rd-navbar-brand"><a href="./"><img class="brand-logo-light" src="<?=$base?>/assets/css/imgs/logo_original.jpeg" style="margin-right: 20px;" alt="" width="140" height="57"/></a></div>
                </div>
                  <div class="rd-navbar-nav-wrap" id="div_menu">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="./inicio">Início</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="./buscar">Buscar</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="./perfil">Perfil</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="./sair">Sair</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section-lg bg-default" style="background-color: #f3e430;">
        <div class="container wow-outer">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="./perfil" id="formulario" method="get"  style="padding:30px;background-color: white;border: 2px solid transparent;border-radius: 20px;margin-top: 20px;">
						<div align="center">
						<img src="<?=$base?>/assets/css/imgs/logo_completa.jpeg"></img>
						</div>
						<p></p>
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" class="form-control" placeholder="" onClick="this.select();" required/>
						</div>
						<div class="form-group">
							<label for="idade">Idade</label>
							<input type="text" id="idade" name="idade" class="form-control" placeholder="" onClick="this.select();" required/>
						</div>
						<div class="form-group">
							<label for="nome">Espécie</label>
							<select type="select" class="form-control" id="especie" name="especie" required>
								<option value=""></option>
								<option value="cachorro">Cachorro</option>
								<option value="gato">Gato</option>
								<option value="peixe">Peixe</option>
								<option value="hamster">Hamster</option>
							</select>
						</div>
						<div class="form-group">
							<label for="raca">Raça</label>
							<input type="text" placeholder="" class="form-control" id="raca" name="raca" onClick="this.select();" required>
						</div>
						<div class="form-group">
							<label for="porte">Porte</label>
							<select type="select" class="form-control" id="porte" name="porte" required>
								<option value=""></option>
								<option value="pequeno">Pequeno Porte</option>
								<option value="medio">Médio Porto</option>
								<option value="grande">Grande Porte</option>
							</select>
						</div>
						<div class="form-group">
							<label for="vacinas">Vacinas</label>
							<input type="text" class="form-control" id="vacinas" name="vacinas" onClick="this.select();" required>
						</div>
						<button class="botao login" type="submit" id="Confirmar" name="Confirmar" value="Confirmar" style="background-color: green !important;">Confirmar</button>
					</form>
				</div>
			</div>
		</div>
	  </section>
		<!-- Page Footer-->
		  <footer class="section footer-minimal context-dark ">
			<div class="container wow-outer">
			  <div class="wow fadeIn">
				<div class="row row-60">
				  <div class="col-12"><a href="index.php"><img src="<?=$base?>/assets/css/imgs/logo_original.jpeg" alt="" style="padding:20px;background-color: white;border-radius: 50%;"/></a></div>
				  <div class="col-12">
					<ul class="footer-minimal-nav">
					  <li><a href="./inicio">Início</a></li>
					  <li><a href="./buscar">Buscar</a></li>
					  <li><a href="./perfil">Perfil</a></li>
					  <li><a href="./sair">Sair</a></li>
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
				<p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Pethouse</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">CCAGR</a></p>
			  </div>
			</div>
		  </footer>
		</div><?php $render('footer'); ?>