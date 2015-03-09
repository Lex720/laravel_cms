<!DOCTYPE html>
<html lang="es-es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Visionary Projects</title>

    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="http://www.visiopro.com.ve/" rel="canonical"></link>
    <meta content="Visionary Projects, C.A" name="author"></meta>
    <meta content="Visionary Projects es una Agencia de Desarrollo Web. ¡Creamos diseños y estrategias web únicas y efectivas." name="description"></meta>
    <meta content="Agencia de Desarrollo Web, Diseño Web, Marketing Web, Analitica web" name="keywords"></meta>
    <meta content="Spanish" name="Language"></meta>

    <meta content="es_ES" property="og:locale"></meta>
    <meta content="article" property="og:type"></meta>
    <meta content="Agencia de Desarrollo Web | Diseño Web | Marketing | Analitica | Venezuela" property="og:title"></meta>
    <meta content="Visionary Projects es una Agencia de Desarrollo Web. ¡Creamos diseños y estrategias web únicas y efectivas." property="og:description"></meta>
    <meta content="http://www.visiopro.com.ve/" property="og:url"></meta>
    <meta content="https://www.facebook.com/#" property="article:publisher"></meta>

    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>    

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}

    <!-- Scrolling Nav CSS & JavaScript -->
    {{ HTML::style('assets/css/scrolling-nav.css') }}
    {{ HTML::script('assets/js/jquery.easing.min.js') }}
    {{ HTML::script('assets/js/scrolling-nav.js') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/custom.css') }}
    {{ HTML::style('assets/css/addons.css') }}

    <!-- Parallax Slider -->
    {{ HTML::style('assets/css/parallax-slider.css') }}
    {{ HTML::script('assets/js/jquery.cslider.js') }}

    <!-- Mockup Slider -->
    {{ HTML::style('assets/css/animate.css') }}

    <!-- Modernizr Custom -->
    {{ HTML::script('assets/js/modernizr.custom.js') }}

    
    <!-- Loader Script -->
    <script type="text/javascript"> $(window).load(function() {$(".loader").fadeOut("slow");})</script>

    <!-- Class Script -->
    <script type="text/javascript">

        //Remove Class Script
        $(window).load(function() {
            if ($(window).width() < 768) {
                $(".navbar").addClass("navbar-default");
            }   
        });
        //Resize Class Script
        $(window).resize(function() {
            if ($(window).width() < 768) {
                $(".navbar").addClass("navbar-default");
            }
            else {
                $(".navbar").removeClass("navbar-default");
            }
        });
    </script>
    
</head>

<!-- Loader Code -->
<div class="loader">
    <ul class="spinner"> 
        <li></li> 
        <li></li> 
        <li></li> 
        <li></li> 
    </ul>
</div>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        
        <div class="container">
            
            <div class="navbar-header page-scroll">

                <div class="navbar-brand page-scroll hidden-xs img1"> {{ HTML::image('assets/img/logo.png') }} </div>
                <div class="navbar-brand page-scroll hidden-xs img2"> {{ HTML::image('assets/img/logo_black.png') }} </div>

                <div class="navbar-brand page-scroll visible-xs"> {{ HTML::image('assets/img/logo_text.png') }} </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Cont&aacute;ctanos</a>
                    </li>
                </ul> 
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">

                <!-- Parallax Slider -->
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Easy management</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <a href="#" class="da-link">Read more</a>
                        <!--<div class="da-img"> {{ HTML::image('assets/img/slider/parallax/1.png') }} </div>-->
                    </div>
                    <div class="da-slide">
                        <h2>Revolution</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link">Read more</a>
                        <!--<div class="da-img"> {{ HTML::image('assets/img/slider/parallax/2.png') }} </div>-->
                    </div>
                    <div class="da-slide">
                        <h2>Warm welcome</h2>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <a href="#" class="da-link">Read more</a>
                        <!--<div class="da-img"> {{ HTML::image('assets/img/slider/parallax/3.png') }} </div>-->
                    </div>
                    <div class="da-slide">
                        <h2>Quality Control</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <a href="#" class="da-link">Read more</a>
                        <!--<div class="da-img"> {{ HTML::image('assets/img/slider/parallax/4.png') }} </div>-->
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
        
                <script type="text/javascript">
                    $(function() {
                    
                        $('#da-slider').cslider({
                            autoplay    : true,

                            bgincrement : 100,
                            // increment the background position 
                            // (parallax effect) when sliding

                            current     : 0,    
                            // index of current slide
                            
                            interval    : 5000  
                            // time between transitions

                        });
                    
                    });
                </script>

            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                    <h1>¡Hola, bienvenido!</h1><div class="underlineh1"></div>

                    <br><br>
            
                    <p class="visible-xs"> {{-- HTML::image('assets/img/logo.png', '', array('class' => 'img-responsive')) --}} </p>
                    
                    <p> <p2><b>Visionary Projects</b></p2> es una compañ&iacute;a <p2>dedicada</p2> a brindarte soluciones de diseño y desarrollo web.</p>
                    
                    <br><br><br>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbs">
                            <div class="caption">
                                <img src="{{ ('assets/img/thumbs/1.png') }}" >
                                <h3>Excelente atencion</h3>
                                <p>Su estudio como campo del conocimiento está directamente relacionado con el comienzo de la Revolución Industrial, constituyendo una de las actividades pilares en el desarrollo de las sociedades modernas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbs">
                            <div class="caption">
                                <img src="{{ ('assets/img/thumbs/2.png') }}" >
                                <h3>Paginas originales</h3>
                                <p>Su estudio como campo del conocimiento está directamente relacionado con el comienzo de la Revolución Industrial, constituyendo una de las actividades pilares en el desarrollo de las sociedades modernas.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbs">
                            <div class="caption">
                                <img src="{{ ('assets/img/thumbs/3.png') }}" >
                                <h3>Crecimiento empresarial</h3>
                                <p>Su estudio como campo del conocimiento está directamente relacionado con el comienzo de la Revolución Industrial, constituyendo una de las actividades pilares en el desarrollo de las sociedades modernas.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!--<div class="col-xs-12 col-sm-12 col-md-12">

                    <div id="cbp-qtrotator" class="cbp-qtrotator">
                    
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/thumbs/1.png') }}" />
                            <blockquote>
                                <footer>Albert Einstein</footer>
                                <p>Nothing will benefit human health and increase the chances for survival of life on Earth.</p>
                            </blockquote>
                        </div>
                        
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/thumbs/2.png') }}" />
                            <blockquote>
                                <footer>Pino Caruso</footer>
                                <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
                            </blockquote>
                        </div>
                        
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/thumbs/3.png') }}" />
                            <blockquote>
                                <footer>Moby</footer>
                                <p>If you don't want to be beaten then you shouldn't condone such behaviour towards anyone.</p>
                            </blockquote>
                        </div>
                        
                    </div>

                    {{ HTML::script('assets/js/jquery.cbpQTRotator.min.js') }}
                    <script>
                        $( function() {
                            /*
                            - how to call the plugin:
                            $( selector ).cbpQTRotator( [options] );
                            - options:
                            {
                                // default transition speed (ms)
                                speed : 700,
                                // default transition easing
                                easing : 'ease',
                                // rotator interval (ms)
                                interval : 8000
                            }
                            - destroy:
                            $( selector ).cbpQTRotator( 'destroy' );
                            */

                            $( '#cbp-qtrotator' ).cbpQTRotator();

                        } );
                    </script>
                </div>-->

            </div>
        </div>
    </section>


    <!-- Separador -->
    <div class="container-fluid">
        <div class="row">

            <!-- Top Navigation -->
            <div id="wrap" class="wrap">
                <div class="mockup">
                    <img class="mockup__img" src="{{ ('assets/img/slider/mockup/mockup.jpg') }}" />
                    <div id="mobile" class="mobile">
                        <ul id="slideshow" class="slideshow">
                            <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/1.jpg') }}"/></li>
                            <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/2.jpg') }}"/></li>
                            <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/3.jpg') }}"/></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{ HTML::script('assets/js/classie.js') }}
            {{ HTML::script('assets/js/main.js') }}
            <script>
                (function() {
                    new Slideshow( document.getElementById( 'slideshow' ) );

                    /* Mockup responsiveness */
                    var body = docElem = window.document.documentElement,
                        wrap = document.getElementById( 'wrap' ),
                        mockup = wrap.querySelector( '.mockup' ),
                        mockupWidth = mockup.offsetWidth;

                    scaleMockup();

                    function scaleMockup() {
                        var wrapWidth = wrap.offsetWidth,
                            val = wrapWidth / mockupWidth;

                        mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
                    }
                    
                    window.addEventListener( 'resize', resizeHandler );

                    function resizeHandler() {
                        function delayed() {
                            resize();
                            resizeTimeout = null;
                        }
                        if ( typeof resizeTimeout != 'undefined' ) {
                            clearTimeout( resizeTimeout );
                        }
                        resizeTimeout = setTimeout( delayed, 50 );
                    }

                    function resize() {
                        scaleMockup();
                    }
                })();
            </script>

        </div>
    </div>


     <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                    <h1>Nuestros servicios</h1><div class="underlineh1"></div>

                    <br><br>

                    <p>Estos son los servicios que ofrecemos para ayudar a que tu empresa crezca y se expanda en su ambito comercial. <p2>Detalles</p2.></p>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Separador -->
    <div class="container-fluid">
        <div class="row">
            {{ HTML::image('assets/img/divisor1.jpg', '', array('class' => 'img-responsive')) }}
        </div>
    </div>


    <!-- Details Section -->
    <section id="details" class="details-section">
        <div class="container-fluid">
            <div class="row">
                
                <h1>Desarrollo Web</h1><div class="underlineh1"></div>

                <br><br>

                <p>Le ofrecemos desarrollos front and back end de <p2>ultima generacion</p2>.</p>

                <ul class="grid cs-style-6">
                    
                    <li>
                        <figure>
                            <img src="{{ ('assets/img/grid/1.png') }}" >
                            <figcaption>
                                <h3>Paginas</h3>
                                <span>Sitios con las ultimas tendencias de diseño y desarrollo web.</span>
                                <a class="page-scroll" href="#contact">Pedir servicio</a>
                            </figcaption>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="{{ ('assets/img/grid/4.png') }}" >
                            <figcaption>
                                <h3>Responsive</h3>
                                <span>Aplicaciones echas a la medida de cualquier dispositivo movil.</span>
                                <a class="page-scroll" href="#contact">Pedir servicio</a>
                            </figcaption>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="{{ ('assets/img/grid/2.png') }}" >
                            <figcaption>
                                <h3>Empresarial</h3>
                                <span>Desarrollamos sistemas para tu empresa a la medida de tus necesidades.</span>
                                <a class="page-scroll" href="#contact">Pedir servicio</a>
                            </figcaption>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="{{ ('assets/img/grid/3.png') }}" >
                            <figcaption>
                                <h3>eCommerce</h3>
                                <span>Sitios de venta virtual para que tu negocio siga creciendo.</span>
                                <a class="page-scroll" href="#contact">Pedir servicio</a>
                            </figcaption>
                        </figure>
                    </li>    
                    
                </ul>

                {{ HTML::script('assets/js/toucheffects.js') }}

            </div>
        </div>
    </section>


    <!-- Separador -->
    <div class="container-fluid">
        <div class="row">
            {{ HTML::image('assets/img/divisor2.jpg', '', array('class' => 'img-responsive')) }}
        </div>
    </div>


    <!-- Separador esquina doblada -->
    <div class="separador ss-style-foldedcorner">
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
    
        <div class="container">
        
            <h1>Contactanos</h1>
        
            <p>Comunícate con nosotros hoy mismo para recibir la mejor asesoría, descubre todo lo que podemos hacer por ti.</p>
        
            <br>
            
            <div class="row text-justify">
                
                <div class="col-xs-12 col-sm-6 col-md-5">
                
                  <h3>Formulario de contacto</h3>
                    
                    <br>
                
                  <form class="form-horizontal" role="form">
                    
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="asunto" class="col-sm-2 control-label">Asunto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="asunto" placeholder="Asunto" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="mensaje" class="col-sm-2 control-label">Mensaje</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                            <button type="reset" class="btn btn-success">Limpiar</button>
                          </div>
                        </div>
                        
                    </form>
                
                </div>
                
                <div class="col-xs-0 col-sm-0 col-md-1"></div>
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                
                  <h3>Datos de contacto</h3>
                    
                    <br>
                    
                    <address>
                    <strong>Direccion:</strong><br>
                    Las Garzas, Lecherias. Estado Anzoategui. Venezuela.
                    
                    <br><br>
                    
                    <strong>Telefonos:</strong><br>
                    Celular: +58 - 412 - 8418822
                    
                    <br><br>

                    <strong>Emails:</strong><br>
                    <a href="mailto:#">info@visiopro.com.ve</a><br>
                    <a href="mailto:#">social@visiopro.com.ve</a><br>
                    </address>
                    
                </div>
                
                <div class="col-xs-0 col-sm-0 col-md-1"></div>
                
                <div class="col-xs-12 col-sm-2 col-md-2">
                
                  <h3>Siguenos:</h3>
                    
                    <br><br>
                    
                    <div class="social">

                        <a href="https://www.facebook.com/visionaryprojects"> {{ HTML::image('assets/img/social/s-fb.png') }} </a>
                        <a href="https://twitter.com/visiopro_social"> {{ HTML::image('assets/img/social/s-tw.png') }} </a>
                        <a href="http://instagram.com/visiopro_social"> {{ HTML::image('assets/img/social/s-ig.png') }} </a>

                     </div>
                
                </div>
                
            </div>
        
            <br><br><br>
        
        </div>

    </section>
    <!-- Separador -->
    </div>

    
    <!-- Copyright Section -->
    <section id="contact" class="copyright-section">
    
      <div class="container">
        
        <div class="row">
            
              <div class="col-xs-12 col-sm-12 col-md-12">
            
                COPYRIGHT © 2014 Visionary Projects, C.A. Todo los derechos reservados.
                    
              </div>
            
            </div>
            
        </div>  
    
    </section>

</body>

</html>