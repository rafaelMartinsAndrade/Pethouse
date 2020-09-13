<?php $render('header'); ?>
    <div class="ie-panel"><a href="https://www.google.com/intl/pt-BR/chrome/"><img src="<?=$base?>/assets/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Você está usando um browser antigo. Para obter uma navegação mais rápida e segura, faça o download de graça!"></a></div>
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
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="./">Início</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Sobre</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#servicos">Serviços</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contatos">Contatos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="./loginrender">Login</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper -->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
      <!-- IMAGEM -->
        <div class="main-bunner-img" id="bunner"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
			  <!-- TÍTULO -->
              <h3 class="box-default-title CoolveticaRg">PETHOUSE</h3>
              <label class="box-default-text">O melhor lugar para seu pet</label>
              <div class="box-default-decor"></div>
              <a class="rd-nav-link" href="#contatos"><button class="botao" type="button" id="registrar">Entre em contato</button></a>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-gray-1 pt-lg-10" id="sobre">
        <section class="section section-sm section-md section-lg section-xl section-inset-1 bg-gray-1">
          <div class="container">
            <div class="row row-50 align-items-center">
              <div class="display col-lg-6 col-xs-6 wow fadeInLeft" align="center">
                <div class="box-image">
				        	<img class="box-image-static" src="<?=$base?>/assets/css/imgs/somos4.jpeg"/>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 wow fadeInRight">
                <h2>Quem somos nós?</h2>
                <p class="justify">A Pet House é uma empresa que fornece um sistema de hospedagem para animais de estimação. Nossos cuidadores passam por uma seleção extremamente cuidadosa e estão 100% prontos para cuidar do seu animal de estimação!</p>
              </div>
            </div>
			    </div>
        </section>
      </div>
      <!-- Featured Offers-->
      <section class="section section-sm section-md section-lg section-xl bg-default padding" id="servicos">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-12 col-lg-12 wow-outer">
              <div class="wow slideInDown">
                <h2>Serviços oferecidos</h2>
                <p class="text-opacity-80"></p>
              </div>
            </div>
          </div>
          <div class="row row-20 row-lg-30">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <a href="loginrender"><div class="product-featured-figure"><img src="<?=$base?>/assets/css/imgs/servicos/Const.jpeg" alt="" width="330" height="355"/>
                    <div class="product-featured-button"></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4 class="CoolveticaRg">Pet Sitter</h4>
                    <p class="big"></p>
                  </div></a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                <a href="loginrender"><div class="product-featured-figure"><img src="<?=$base?>/assets/css/imgs/servicos/elab.jpeg" alt="" width="350" height="355"/>
                    <div class="product-featured-button"></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4 class="CoolveticaRg">Pet Walker</h4>
                    <p class="big"></p>
                  </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-sm section-md section-lg section-xl bg-gray-1" id="contatos">
        <div class="container" style="margin: 0px !important;">
          <div class="row justify-content-center text-center">
            <div class="col-md-12 col-lg-12 wow-outer">
              <div class="wow slideInDown">
                <h2>Nossos Contatos</h2>
				        <p></p>
			        </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 wow fadeInLeft">
              <div class="box-icon-classic">
                <div class="box-icon-inner "><span class="icon-xl linearicons-map2"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="https://www.google.com/maps/place/Col%C3%A9gio+COTEMIG+-+Barroca/@-19.9363346,-43.9686731,17z/data=!3m1!4b1!4m5!3m4!1s0xa6970bbf3f5be1:0x696078cc22d9d6cb!8m2!3d-19.9363346!4d-43.9664844" target="_blank">Barroca, R. Santa Cruz, 546</a></h4>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 wow fadeInLeft">
              <div class="box-icon-classic">
                <div class="box-icon-inner"><span class="icon-xl fa-whatsapp"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="tel:#">+55 31 98920-3855</a></h4>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 wow fadeInLeft" id="email">
              <div class="box-icon-classic">
                <div class="box-icon-inner"><img src="<?=$base?>/assets/css/imgs/gmail.png"></div>
                <div class="box-icon-caption">
                  <h4 id="texto_email"><a href="mailto:pethouseatendimento@gmail.com">pethouseatendimento@gmail.com</a></h4>
                </div>
              </div>
            </div>
	      </div>
		</section>
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.php"><img src="<?=$base?>/assets/css/imgs/logo.png" alt="" width="140" height="57"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Início</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Sobre</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#servicos">Serviços</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#contatos">Contatos</a>
                  </li>
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
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Pethouse</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="#">CCAGR</a></p>
          </div>
        </div>
      </footer>
    </div>
	</div>
</div>
<?php $render('footer'); ?>