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
    {{ HTML::style('assets/css/scrolling-nav.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/custom.css') }}

    <!-- Parallax Slider -->
    {{ HTML::style('assets/css/parallax-slider.css') }}
    {{ HTML::script('assets/js/jquery.cslider.js') }}

    <!-- Modernizr ¡NO ALTERAR EL ORDEN! -->
    {{ HTML::script('assets/js/modernizr.custom_qr.js') }} <!-- Quotes Rotator  -->
    {{ HTML::script('assets/js/modernizr.custom_he.js') }} <!-- Hover Effects   -->
    {{ HTML::script('assets/js/modernizr.custom_ps.js') }} <!-- Parallax Slider -->
    
    <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(9.448930, -64.463117),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
    
      var image = '_marker.png';
    
      var myLatLng = new google.maps.LatLng(9.449930, -64.463117);
    
      var marker = new google.maps.Marker({
        position: myLatLng
          , map: map
          /*, icon: image*/
          , cursor: 'default'
          , draggable: false
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- Loader Script -->
    <script type="text/javascript"> $(window).load(function() {$(".loader").fadeOut("slow");})</script>
    
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
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll hidden-xs"> {{ HTML::image('assets/img/logo.png') }} </a>
                <a class="navbar-brand page-scroll visible-xs"> {{ HTML::image('assets/img/logo_text.png') }} </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav pull-right ajuste">
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
                        <div class="da-img"> {{ HTML::image('assets/img/slider/parallax/1.png') }} </div>
                    </div>
                    <div class="da-slide">
                        <h2>Revolution</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link">Read more</a>
                        <div class="da-img"> {{ HTML::image('assets/img/slider/parallax/2.png') }} </div>
                    </div>
                    <div class="da-slide">
                        <h2>Warm welcome</h2>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <a href="#" class="da-link">Read more</a>
                        <div class="da-img"> {{ HTML::image('assets/img/slider/parallax/3.png') }} </div>
                    </div>
                    <div class="da-slide">
                        <h2>Quality Control</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <a href="#" class="da-link">Read more</a>
                        <div class="da-img"> {{ HTML::image('assets/img/slider/parallax/4.png') }} </div>
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
        
                <script type="text/javascript">
                    $(function() {
                    
                        $('#da-slider').cslider({
                            autoplay    : false,
                            bgincrement : 450
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
                
                    <h1>¡Hola, bienvenido!</h1><br>
            
                    <p><b>¿Tienes un negocio y piensas en impulsar tus ventas?<br><br>¿Quieres dar a conocer tus servicios?<br><br>¿Piensas crecer en el mercado?</b></p><br>
            
                    <h3>¡Te tenemos la soluci&oacute;n!</h3><br>
                    
                    <p class="visible-xs"> {{ HTML::image('assets/img/logo.png', '', array('class' => 'img-responsive')) }} </p><br>
                    
                    <p> <p2><b>Visionary Projects</b></p2> es una compañ&iacute;a <p2>dedicada</p2> a brindarte soluciones de diseño y desarrollo web. Creamos <p2>paginas web dinamicas</p2> hechas a tu medida y necesidades. Estamos completamente comprometidos en ayudarte a <p2>impulsar tu imagen o empresa.</p2></p><br>
            
                    <p>Te ofrecemos novedosos m&eacute;todos publicitarios que ayudar&aacute;n a expandir tu negocio hacia nuevos horizontes aprovechando el sistema de marketing online ya practicado en la actualidad por numerosas compañ&iacute;as en el mundo, &uacute;nete a esta nueva tendencia que crece cada día m&aacute;s.. <p2>No te quedes atr&aacute;s!!<p2></p><br>
                    
                    <p>Con nosotros aprovecharas las innovadoras herramientas en el &aacute;mbito tecnológico que ayuden a facilitar los procesos internos de trabajo en tu compañ&iacute;a, para as&iacute; de esta manera <p2>reducir considerablemente el esfuerzo y los costos operativos</p2> mediante la sistematizaci&oacute;n del sistema.</p><br>
                    
                    <p>Brindamos ayuda para crear o mejorar tu imagen corporativa, mediante nuestro sistema de diseño lograremos que tu representaci&oacute;n &aacute;fica sea <p2>la m&aacute;s innovadora, profesional y llamativa del mercado.</p2></p><br>
                    
                    <p>En Visiopro nos esforzamos en ofrecer lo mejor, las soluciones m&aacute;s ajustadas a las necesidades y conveniencias de nuestros clientes, ofrecemos el mejor asesoramiento para hacer un &oacute;ptimo marketing web a su empresa. <p2><b>Su &Eacute;xito es nuestro &Eacute;xito!</b></p2></p><br>
                    
                    <p>Cont&aacute;ctenos Hoy! y vea como nuestros servicios de diseño y desarrollo web lo pueden ayudar a cumplir sus metas.. <p2><b>Lo esperamos!</b></p2></p><br>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                    <h1>Nuestros servicios</h1><br><br>

                    <p>Estos son los servicios que ofrecemos para ayudar a que tu empresa crezca y se expanda en su ambito comercial.<br><br>Click en la imagen para ver detalles.</p>
            
                    <div class="row">

                        <ul class="grid cs-style-6">
                            
                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/1.png') }}" >
                                    <figcaption>
                                        <h3>Camera</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/2.png') }}" >
                                    <figcaption>
                                        <h3>Phone</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/3.png') }}" alt="img04">
                                    <figcaption>
                                        <h3>Settings</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/4.png') }}" >
                                    <figcaption>
                                        <h3>Camera</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/5.png') }}" >
                                    <figcaption>
                                        <h3>Phone</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <img src="{{ ('assets/img/grid/6.png') }}" alt="img04">
                                    <figcaption>
                                        <h3>Settings</h3>
                                        <span>Jacob Cummings</span>
                                        <a class="page-scroll" href="#contact">Pedir servicio</a>
                                    </figcaption>
                                </figure>
                            </li>   
                            
                        </ul>

                        {{ HTML::script('assets/js/toucheffects.js') }}

                    </div>
                    
                </div>
            </div>
        </div>
    </section>


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

            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div id="cbp-qtrotator" class="cbp-qtrotator">
            
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/quotes/1.jpg') }}" />
                            <blockquote>
                              <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
                              <footer>Pino Caruso</footer>
                            </blockquote>
                        </div>
                        
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/quotes/2.jpg') }}" />
                            <blockquote>
                              <p>Nothing will benefit human health and increase the chances for survival of life on Earth.</p>
                              <footer>Albert Einstein</footer>
                            </blockquote>
                        </div>
                        
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/quotes/3.jpg') }}" />
                            <blockquote>
                              <p>If you don't want to be beaten then you shouldn't condone such behaviour towards anyone.</p>
                              <footer>Moby</footer>
                            </blockquote>
                        </div>
                        
                        <div class="cbp-qtcontent">
                            <img src="{{ ('assets/img/quotes/4.jpg') }}" />
                            <blockquote>
                              <p>My body will not be a tomb for other creatures.</p>
                              <footer>Leonardo Da Vinci</footer>
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

                    <!-- MAPA -->
                    <!--<div id="map_canvas" class="center-block"></div>-->

                </div>

            </div>
        
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

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}

    <!-- Scrolling Nav JavaScript -->
    {{ HTML::script('assets/js/jquery.easing.min.js') }}
    {{ HTML::script('assets/js/scrolling-nav.js') }}

</body>

</html>