<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tune-In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta name="csrf-token" content="{{csrf_token()}}"> 
    <meta name="google-signin-client_id" content="588092467259-ch88k8kbajefc9ttlgplj1e1rudgg6fm.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="icon" type="image/png" href="images/icono.png"/>
  </head>
  <body>
    <!-- <input type="button" id="token" style="display: none;" value="'{{csrf_token()}}'" name=""> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{ route('home') }}"><img id="imagen" src="images/logo.jpg"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	        </button>
	        <div class="collapse navbar-collapse" id="ftco-nav">
	            <ul class="navbar-nav ml-auto">
  					    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link pl-0">Inicio</a></li>
  					    <li class="nav-item"><a href="#acercadenosotros" class="nav-link">Acerca de nosotros</a></li>
  				      <li class="nav-item"><a href="#contactanos" class="nav-link">Contáctanos</a></li>
                <!-- <li class="nav-item"><a href="perfil.html" class="nav-link">Perfíl</a></li> -->
                @if(Auth::check())
                  <li class="nav-item">
                  <a href="{{ route('getListRecommended') }}" class="nav-link">Lista recomendada</a>
                  </li>
                  <li class="nav-item">
                  <a href="{{ route('localResearch') }}" class="nav-link">Rating</a>
                  </li>
                @else
                @endif                            
                <li class="nav-item">
                    @if(Auth::check())
                      <a href="{{ route('logout') }}" class="nav-link">Cerrar sesión</a>
                    @else
                        <a href="{{ url('loginView') }}" class="nav-link">Iniciar sesión</a>
                    @endif                            
                </li>
              </ul>
	        </div>
	    </div>
    }
	</nav>
    <!-- END nav -->
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/banner3.jpg);" data-stellar-background-ratio="0.5">
        @yield("content")
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section" id="contactanos">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-xl-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">¿Tienes preguntas?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Cq. 1 #70-01, Medellín, Antioquia, Colombia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+57 300 5111209</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">tuneinsoftware@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="ftco-footer-widget mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.178737069269!2d-75.59105718529415!3d6.240158828123671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429a4479ccb51%3A0x9462389ae1d840b0!2sUniversidad+Pontificia+Bolivariana!5e0!3m2!1ses!2sco!4v1551229399773" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Suscríbete a nuestra página para que no te pierdas ninguna novedad.</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Correo electronico">
                  <input type="submit" value="Suscribirse" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados || Equipo de desarrollo de Tune-In
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>
  <script src="js/home.js"></script>
  <script src="{{asset('js/id3js/id3.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="js/localResearchAjax.js"></script>

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="588092467259-ch88k8kbajefc9ttlgplj1e1rudgg6fm.apps.googleusercontent.com">
  </body>
</html>
