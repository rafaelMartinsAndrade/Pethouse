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
                  <div class="rd-navbar-brand"><a href="index.php"><img class="brand-logo-light" src="css/imgs/logo.png" alt="" width="140" height="57"/></a></div>
                </div>
                  <div class="rd-navbar-nav-wrap" id="div_menu">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Início</a>
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
	  	<div class="main-bunner-img" style="background-image: url(&quot;<?php if($listar->IMAGEM != "" && $listar->IMAGEM != null){echo $listar->IMAGEM;}else{echo "css/imgs/inicio_fundo.jpeg";}?>&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title"><?php echo $listar->TITULO; ?></h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text"><?php echo $listar->DESCRICAO; ?></p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default" id="blog">
        <div class="container wow-outer">
			<div class="row">
				<?php if($listar != "") : ?>
				<div class="col-md-1"></div>
				<div class="col-md-10">
				<h2><?php echo $listar->TITULO; ?></h2>
				<p style="font-size: 20px;"><?php echo $listar->DESCRICAO; ?></p><br>
				<div id="conteudo">
				<?php echo $listar->CONTEUDO; ?>
				</div>
				</div>
				<?php else: ?>
					<div class="col-md-12 text-center wow slideInDown">
						<h3>Esta postagem acabou de ser removida!!</h3>
					</div>
				<?php endif; ?>
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
<?php $render('footer'); ?>