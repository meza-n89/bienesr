<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Keny De Alas Real state agent</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url();?>/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="<?php echo base_url();?>/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>/images/logos/150.jpg" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.html">Inicio</a></li>
                        <li><a href="<?php echo site_url();?>/About/acercaview">Acerca de mi</a></li>
                        <li><a href="<?php echo site_url();?>service.html">Servicios</a></li>
                        <li><a href="<?php echo site_url();?>/Login/login_view">Login</a></li>
                        <li><a href="properties.html">Propiedades</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>
						<li class="search-option">
							<button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
							<form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
								<input type="text" placeholder="Search....">
								<button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
					   </li> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>

	
	<ul class='slideshow'>
		<li>
			<span>Summer</span>
		</li>
		<li>		
			<span>Fall</span>
		</li>
		<li>		
			<span>Winter</span>
		</li>
		<li>
			<span>Spring</span>
		</li>
	</ul>
	
    <div class="parallax first-section">
        <div class="container">


            


            <div class="row">
                <?php if(isset($mensaje)): ?>
                <?php if($mensaje[1] == TRUE): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                          <?php echo $mensaje[0] ?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                <?php elseif($mensaje[1]==FALSE): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <?php echo $mensaje[0] ?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                     </div>
                 <?php endif; ?>
            <?php endif; ?>

                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i> HAZ UNA CITA</h3>
                        <form  class="row"  method="post" action="<?php echo site_url();?>/Welcome/add_cita">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nombre" id="first_name1" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="apellido" id="last_name1" class="form-control" placeholder="Apellido">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email1" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="telefono" id="phone1" class="form-control" placeholder="Numero de telefono">
                                </div>
                                <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Seleciona un Horario</label>
                                    <select name="horario" id="select_service1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="selecttime">Seleciona un Horario</option>
                                        <option value="Dias de semana">Dias de semana</option>
                                        <option value="Fin de semana">Fin de semana</option>
                                    </select>
                                    <input type="dat" name="">
                                </div>-->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-sm-6 col-xs-12"
class="col-lg-6 col-md-6 col-sm-6 col-xs-12">fecha de inicio</label>
                                    <input type="date" name="fecha_ini" id="fecha_ini" class="form-control" placeholder="Fecha de inicio">
                                </div>
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="col-lg-6 col-md-6 col-sm-6 col-xs-12"
class="col-lg-6 col-md-6 col-sm-6 col-xs-12">fecha de Finalizacion</label>
                                    <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" placeholder="Fecha de inicio">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Obten una cita</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<div class="col-md-6 col-sm-12">
                    <div class="big-tagline clearfix">
                        <h2>Keny De Alas</h2>
                        <p class="lead">Agente Inmobiliaro de RE/MAX vende o compra la casa de tus sueños
                        con los mejores</p>
                        <a data-scroll href="#gallery" class="btn btn-light btn-radius grd1 btn-brd">View Gallery</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="agent" class="parallax section db parallax-off" style="background-image:url('<?php echo base_url();?>uploads/parallax_02.png');">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Agent Details</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>The Agent</h4>
                        <h2>Jenny Martines</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

                        <a href="#contact" data-scroll class="btn btn-light global-radius btn-brd grd1 effect-1">Contact Me</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="post-media wow fadeIn">
                        <img src="<?php echo base_url();?>/uploads/agent.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="agencies_meta clearfix">
                        <span><i class="fa fa-envelope "></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                        <span><i class="fa fa-link "></i> <a href="#">www.sitename.com</a></span>
                        <span><i class="fa fa-phone-square "></i> +1 232 444 55 66</span>
                        <span><i class="fa fa-print "></i> +1 232 444 55 66</span>
                        <span><i class="fa fa-facebook-square "></i> <a href="#">facebook.com/tagline</a></span>
                        <span><i class="fa fa-twitter-square "></i> <a href="#">twitter.com/tagline</a></span>
                        <span><i class="fa fa-linkedin-square "></i> <a href="#">linkedin.com/tagline</a></span>
                    </div><!-- end agencies_meta -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>
	
	<div class="about-box">
		<div class="container">
			<div class="row">
				<div class="top-feature owl-carousel owl-theme">
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="<?php echo base_url();?>/uploads/icon-01.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Full Furnished</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="<?php echo base_url();?>/uploads/icon-02.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Living Inside a Nature</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi.</p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="<?php echo base_url();?>/uploads/icon-03.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Luxurious Fittings</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="<?php echo base_url();?>/uploads/icon-04.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Non Stop Security</a></h4>
							<p>Lorem Is a dummy Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
				</div>
			</div>
			
			<hr class="hr1">
			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="<?php echo base_url();?>/uploads/about_bg.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Awards Winning Real Estate Company</h4>
                        <h2>Welcome to CITY Real Estate</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						<p>Aenean eleifend in felis id viverra. Vestibulum semper ex eu molestie pulvinar. Maecenas non efficitur metus, et semper sem. Mauris ligula sapien, gravida a scelerisque ut, vehicula sed mauris. Proin dapibus mi id vulputate euismod. Nam ullamcorper dui tellus, non lacinia lorem hendrerit eu. Donec at orci cursus, rutrum metus eget, cursus turpis.  </p>
						<a href="#" class="btn btn-light btn-radius grd1 btn-brd"> Read More </a>
                    </div>
				</div>
			</div>
			
		</div>
	</div>

    

    <div id="testimonials" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Happy Customers</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>/uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="<?php echo base_url();?>/images/logos/logo-realestate.png" alt="">
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Info Link</h3>
                        </div>

                        <ul class="twitter-widget footer-links">
                            <li><a href="#"> Home </a></li>
                            <li><a href="#"> About Us </a></li>
                            <li><a href="#"> Services</a></li>
							<li><a href="#"> Gallery</a></li>
							<li><a href="#"> Properties</a></li>
							<li><a href="#"> Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-github"></i> Github</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">Design By : <a href="https://html.design/">HTML design</a> Re-distribution by <a href="https://themewagon.com/" target="_blank">Themewagon</a> All Rights Reserved. &copy; 2018 </p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <i class="fa fa-envelope-o"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url();?>js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url();?>js/custom.js"></script>
    <script src="<?php echo base_url();?>js/portfolio.js"></script>
    <script src="<?php echo base_url();?>js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="<?php echo base_url();?>js/map.js"></script>

</body>
</html>