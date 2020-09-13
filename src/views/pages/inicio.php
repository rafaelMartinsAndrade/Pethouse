<?php $render('header'); ?><div class="ie-panel"><a href="https://www.google.com/intl/pt-BR/chrome/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Você está usando um browser antigo. Para obter uma navegação mais rápida e segura, faça o download de graça!"></a></div>
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Postar</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Sair</a>
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
			  <h1 class="box-default-title CoolveticaRg">Funcionários</h1>
			</div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default" id="blog">
        <div class="container wow-outer">
          <!-- Owl Carousel-->
		  <?php if($funcionarios != "" && $funcionarios != null) :?>
			<h2 class="text-center wow slideInDown" id="">Melhores Cuidadores</h2>
			<div class="row">
			<div class="col-md-1 col-lg-1"></div>
			<div class="col-md-10 col-lg-10">
			<div class="owl-carousel grab wow fadeInUp" id="grab" data-items="1" data-md-items="2" data-lg-items="4" data-dots="false" data-nav="false" data-stage-padding="5" data-loop="false" data-margin="5" data-mouse-drag="true">
			<?php foreach ($funcionarios as $funcionario) : ?>
					<div class="post-corporate">
					  <h4 class="post-corporate-title"><a href="post.php?codigo=<?=$funcionario['id_cliente'];?>"><?=$funcionario['id_cliente']; ?></a></h4>
					  <div class="post-corporate-text">
						<a href="post.php?codigo=<?=$posts->ID; ?>"><p style="width: 80%;"><?=$funcionario->DESCRICAO; ?></p></a>
					  </div><a class="post-corporate-link" href="post.php?codigo=<?=$funcionario->ID; ?>">Leia mais<span class="icon linearicons-arrow-right"></span></a>
					</div>
			</div>
			</div>
			<?php endforeach; ?>
			<?php else: ?>
				<div class="col-md-12 text-center wow slideInDown">
					<h3>Nenhum cuidador foi encontrado</h3>
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