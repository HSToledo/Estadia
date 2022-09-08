<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ambiental App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('dist/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('dist/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/owl.theme.default.min.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('dist/css/flexslider.css')}}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{asset('dist/css/pricing.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('dist/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="#">Ambiental</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Inicio</a></li>
							<li><a href="courses.html">Nosotros</a></li>
							<li><a href="teacher.html">Contenido</a></li>
							<li><a href="about.html">Test ambiental</a></li>
							
							<li class="btn-cta"><a href="{{route('login.index')}}"><span>Ingresar</span></a></li>
							<li class="btn-cta"><a href="{{route('register.index')}}"><span>Registrarse</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(https://prensaregional.pe/wp-content/uploads/2018/11/El-reto-de-la-educaci%C3%B3n-ambiental.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>La educación ambiental ayudará a las futuras generaciones</h1>
									<h2>Proyecto de <a href="https://ediintec.com/" target="_blank">Ediintec</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Revisa el contenido</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(https://demos.freehtml5.co/education/images/img_bg_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Impulsando al cultura ambiental</h1>
                                   <h2>Proyecto de <a href="https://ediintec.com/" target="_blank">Ediintec</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Revisa el contenido</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(https://www.portalambiental.com.mx/sites/default/files/media/image/2021/01/educacion_ambiental.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Enseñando sobre Biodiversidad y consumo responsable</h1>
                                   <h2>Proyecto de <a href="https://ediintec.com/" target="_blank">Ediintec</a></h2>
                                   <p><a class="btn btn-primary btn-lg btn-learn" href="#">Revisa el contenido</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Categorías del sistema</h2>
					<p>Dentro de las categorías que tendrá este sistema se encuentran</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-leaf"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Consumo responsable</a></h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-leaf"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Biodiversidad</a></h3>
							
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-leaf"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Ecosistemas</a></h3>
							
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-leaf"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Cambio climático</a></h3>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Ambiental App</h2>
					<p>Encuentra más contenido sobre el proyecto</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(https://www.plataformadeinfancia.org/wp-content/uploads/2022/06/dia-mundial-medio-del-ambiente-.svg);">
						</a>
						<div class="desc">
							<h3><a href="#">Test reto ciudadano</a></h3>
							<p>Este increíble test te permitirá medir tus conocimientos ambientales y mejorar tu cultura ambiental a través de algunos consejos</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">iniciar test</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(https://www.imsa-search.com/wp-content/uploads/2020/09/Sustainability.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Contenido</a></h3>
							<p>Te ofrecemos un amplia gama de información y contenido referente al cuidado ambiental</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Revisar contenido</a></span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Historia</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">

									<blockquote>
										<p>El proyecto iniciado y dirigido por Ediintec en 2022, tiene como objetivo alcanzar al sector educativo con contenido relevante y útil.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									
									<blockquote>
										<p>El proyecto surgió con el fin de ofrecer una herramienta a la ciudadanía para poder aprender más sobre educación ambiental</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									
									<blockquote>
										<p>Buscando ofrecer herramientas de calidad para lograr un mundo más saludable y con una educación ambiental.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div id="fh5co-register" style="background: radial-gradient(circle at top left, #933481, #cd91bf); ">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Suscribete al sitio para recibir más información y contenido</h2>
					
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Suscribete</a></p>
				</div>
			</div>
		</div>
	</div>

	

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>Sobre Ambiental App</h3>
					<p>Sistema creado y dirigido por Ediintec</p>
				</div>
				

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Menú</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Contenido</a></li>
						<li><a href="#">Test ambiental</a></li>
                        <li><a href="#">Sucribirse</a></li>
                        <li><a href="#">Aviso de privacidad</a></li>
						
					</ul>
				</div>
			</div>

			

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('dist/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('dist/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('dist/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('dist/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('dist/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('dist/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('dist/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('dist/js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{asset('dist/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('dist/js/main.js')}}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

