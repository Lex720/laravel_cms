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

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/scrolling-nav.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/custom.css') }}
    
    <!--JS para BxSlider -->
    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    {{ HTML::script('assets/bxslider/jquery.bxslider.min.js') }}
    <!-- bxSlider CSS file -->
    {{ HTML::style('assets/bxslider/jquery.bxslider.css') }}
    
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
                    <!--<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#mision">Mision</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#vision">Vision</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#contact">Contactanos</a>
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
                
                  <ul class="bxslider hidden-xs">
                        <li><a> {{ HTML::image('assets/img/slider/1.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/2.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/3.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/4.jpg') }} </a></li>
                  </ul>
                    
                    <ul class="bxslider visible-xs">
                        <li><a> {{ HTML::image('assets/img/slider/1a.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/2a.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/3a.jpg') }} </a></li>
                        <li><a> {{ HTML::image('assets/img/slider/4a.jpg') }} </a></li>
                  </ul>
                    
                <script type="text/javascript">
                $(document).ready(function(){
                  $('.bxslider').bxSlider({
                    auto: true,
                    mode: 'fade',
                    autoControls: false,
                    adaptiveHeight: false,
                    captions: false,
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
            
                    <h2 >Te tenemos la soluci&oacute;n!</h2><br>
                    
                    <p class="visible-xs"> {{ HTML::image('assets/img/logo2.png', '', array('class' => 'img-responsive')) }} </p><br>
                    
                    <p> <p2><b>Visionary Projects</b></p2> es una compañ&iacute;a <p2>dedicada</p2> a brindarte soluciones de diseño y desarrollo web. Creamos <p2>paginas web dinamicas</p2> hechas a tu medida y necesidades. Estamos completamente comprometidos en ayudarte a <p2>impulsar tu imagen o empresa.</p2></p><br>
            
                    <p>Te ofrecemos novedosos m&eacute;todos publicitarios que ayudar&aacute;n a expandir tu negocio hacia nuevos horizontes aprovechando el sistema de marketing online ya practicado en la actualidad por numerosas compañ&iacute;as en el mundo, &uacute;nete a esta nueva tendencia que crece cada día m&aacute;s.. <p2>No te quedes atr&aacute;s!!<p2></p><br>
                    
                    <p>Con nosotros aprovecharas las innovadoras herramientas en el &aacute;mbito tecnológico que ayuden a facilitar los procesos internos de trabajo en tu compañ&iacute;a, para as&iacute; de esta manera <p2>reducir considerablemente el esfuerzo y los costos operativos</p2> mediante la sistematizaci&oacute;n del sistema.</p><br>
                    
                    <p>Brindamos ayuda para crear o mejorar tu imagen corporativa, mediante nuestro sistema de diseño lograremos que tu representaci&oacute;n &aacute;fica sea <p2>la m&aacute;s innovadora, profesional y llamativa del mercado.</p2></p><br>
                    
                    <p>En Visiopro nos esforzamos en ofrecer lo mejor, las soluciones m&aacute;s ajustadas a las necesidades y conveniencias de nuestros clientes, ofrecemos el mejor asesoramiento para hacer un &oacute;ptimo marketing web a su empresa. <p2><b>Su &Eacute;xito es nuestro &Eacute;xito!</b></p2></p><br>
                    
                    <p>Cont&aacute;ctenos Hoy! y vea como nuestros servicios de diseño y desarrollo web lo pueden ayudar a cumplir sus metas.. <p2><b>Lo esperamos!</b></p2></p><br>
                    
                    <br><br>
                    
                    <a class="btn btn-primary page-scroll" href="#services">¡Nuestros servicios!</a><br><br><br>
                    
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

                        <ul id="og-grid" class="og-grid">
                        
                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="{{ url('assets/img/grid/1.png') }}" data-title="Diseño web" data-description="Hacemos que tu sitio web sea visualmente atractivo para así garatizar tu éxito. Tenemos conocimientos y experiencia en todas las áreas de diseño/desarrollo de sitios y su funcionalidad. Todos nuestros proyectos de diseño web son desarrollados con base y fundamento pensando en las necesidades de tu negocio.<br><br>El diseño web lo planificamos utilizando soluciones de vanguardia, a menudo de código abierto, limpio y semántico, compatible con los estándares del W3C.">{{ HTML::image('assets/img/grid/thumbs/1.png') }}</a>
                                </li>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="img/grid/b.png" data-title="Desarrollo Web" data-description="Te ofrecemos el mejor conjunto de tecnologías de software combinadas con los procesos de base de datos más el uso de un navegador en Internet, con el objetivo de crear una aplicacion adaptada completamente a tu negocio y a tus necesidades.<br><br>Primero planificamos y desarrollamos el sistema y el funcionamiento del software, nos encargamos de ofrecerte el mejor diseño final para tu web y despues integramos ambas partes para entregarte un sistema unico para ti.">{{ HTML::image('assets/img/grid/thumbs/2.png') }}</a>
                                </li>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="img/grid/c.png" data-title="Web adaptable" data-description="La navegación web en dispositivos móviles es cada vez más popular y se ha vuelto más común por lo que incorporamos un servicio de diseño web adaptativo con el cual el sitio se adaptara al entorno del usuario y el dispositivo que este en uso.<br><br>Optimizamos tu web para que sea vista de la mejor manera desde PCs, laptops, tablets y smartphones, todo esto con el objetivo de mejorar la experiencia de navegación del usuario, reduciendo costos de creación y mantenimiento.">{{ HTML::image('assets/img/grid/thumbs/3.png') }}</a>
                                </li>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="img/grid/d.png" data-title="Diseño grafico" data-description="Hoy más que nunca todas las organizaciones necesitan diferenciarse unas de otras y sobre todo destacarse. Nos encargamos de desarrollar, crear y diseñar toda la imagen e identidad corporativa de su empresa, negocio o servicio, y nos ocuparemos de toda la comunicación gráfica que necesite.<br><br>Una identidad cuidadosamente construida es de gran ayuda para lograr que una organización, institución o empresa, tengan una proyección acertada.">{{ HTML::image('assets/img/grid/thumbs/4.png') }}</a>
                                </li>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="img/grid/e.png" data-title="Aplicaciones empresariales" data-description="Diseñamos y desarrollamos para ti un sistema en entorno web ya sea de forma interna (intranet) o externa que te ayude a solventar problemas presentes y/o agilizar los procesos dentro de tu empresa.<br><br>Ofrecemos aplicaciones capaces de llevar un registro de datos con métodos de consulta y modificación de los mismos, sistemas de reportes, control de pagos y mucho más.">{{ HTML::image('assets/img/grid/thumbs/5.png') }}</a>
                                </li>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <li>
                                <a href="#" data-largesrc="img/grid/f.png" data-title="Marketing social" data-description="Te brindamos la mejor manera de darte a conocer mediante la publicidad. A través de nosotros podrás potenciar el valor de tu marca y conseguir que tu imagen corporativa y servicios se diferencien y se destaquen de tu competencia.<br><br>Una de las cosas más importantes a la hora de llevarlas a cabo, es saber bien que es lo que se va a comunicar, a quien y para qué, nosotros nos encargamos del cómo y te orientaremos a encontrar esas respuestas tras nuestra experiencia.">{{ HTML::image('assets/img/grid/thumbs/6.png') }}</a>
                                </li>
                            </div>

                        </ul>

                    </div>
                    
                    <br><br>
                    
                    <a class="btn btn-primary page-scroll" href="#contact">¡Contactanos!</a><br><br><br>
                    
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
        
            <div class="row">
            
              <div class="col-xs-12 col-sm-12 col-md-12">
                
                  <div id="map_canvas" class="center-block"></div>

              </div>

      </div>
            
        <br><br>
            
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
            
        </div>
        
        <br><br>
        
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


    <!-- jQuery Version 1.11.0 
    <script src="js/jquery-1.11.0.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}

    <!-- Scrolling Nav JavaScript -->
    {{ HTML::script('assets/js/jquery.easing.min.js') }}
    {{ HTML::script('assets/js/scrolling-nav.js') }}

    <!-- JavaScript para GRID -->
    <script src="js/grid.js"></script>
    <script>
        $(function() {
        Grid.init();
        });
    </script>

</body>

</html>