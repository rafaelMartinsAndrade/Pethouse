<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Blog</title>
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
    <div class="ie-panel"></div>
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
                <div class="rd-navbar-panel" style="text-align: center;">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap" id="btn_menu" onclick="buttonmenu()"><span id="span_menu"></span></button>
                  <h2 class="titulo_menu fadding" id="titulo_menu">CUIDADORES</h2>
                </div>
                  <div class="rd-navbar-nav-wrap" id="div_menu">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="cuidadores.html">Cuidadores</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="perfil.html">Perfil</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="pagamento.html">Pagamento</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Sair</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section-lg bg-default" id="blog" style="padding-top: 40px !important;">
        <div class="container wow-outer">
			    <div class="row">
            <a href="./cuidadores.html">
            <div class="box">
              <div class="row" id="row1">
                <div class="col-xs-4 col-sm-4">
                  <img src="css/imgs/perfil.png" id="img1" class="perfil"></img>
                </div>
                <div class="col-xs-8 col-sm-8">
                <h2>Julio</h2>
                <h4>A vida é top, mas eu amo cães!</h4>
                </div>
              </div>
            </div>
            </a>
            <a href="./cuidadores.html">
            <div class="box">
              <div class="row" id="row2">
                <div class="col-xs-4 col-sm-4">
                  <img src="css/imgs/perfil.png" id="img2" class="perfil"></img>
                </div>
                <div class="col-xs-8 col-sm-8">
                <h2>Julio</h2>
                <h4>A vida é top, mas eu amo cães!</h4>
                </div>
              </div>
            </div>
            </a>
            <a href="./cuidadores.html">
            <div class="box">
              <div class="row" id="row3">
                <div class="col-xs-4 col-sm-4">
                  <img src="css/imgs/perfil.png" id="img3" class="perfil"></img>
                </div>
                <div class="col-xs-8 col-sm-8">
                <h2>Julio</h2>
                <h4>A vida é top, mas eu amo cães!</h4>
                </div>
              </div>
            </div>
            </a>
            <a href="./cuidadores.html">
              <div class="box">
                <div class="row" id="row4">
                  <div class="col-xs-4 col-sm-4">
                    <img src="css/imgs/perfil.png" id="img4" class="perfil"></img>
                  </div>
                  <div class="col-xs-8 col-sm-8">
                  <h2>Julio</h2>
                  <h4>A vida é top, mas eu amo cães!</h4>
                  </div>
                </div>
              </div>
            </a>
         </div>
      </section>
      </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    <script>
    window.onload = formatImg();
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