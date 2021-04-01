<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Pic Audience">
<link rel="shortcut icon" href="{{URL('/')}}/img/favicon.png"/>
<title>Pic Audience</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/contact-form.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/vc.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/elegant-font/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/remodal.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/wocommerce.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/remodal-default-theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('/')}}/css/page/contact.css" type="text/css" media="all" />
<script type="text/javascript" src="{{url('/')}}/js/jquery.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery-migrate.min.js"></script>
</head>

<body class="woo_active standard_page dark_bg have_featured_image">
<div class="preload"></div>
<div class="header">
  <div class="logo_holder"> <a href="{{url('/')}}/"><img class="logo_for_dark_bg" src="{{url('/')}}/img/white.png" alt="Pic Audience" /><img class="logo_for_light_bg" src="{{url('/')}}/img/white.png" alt="Pic Audience" /></a> </div>
  <div class="contacts">
    <p><span class="hide_mobile mr-5"></span><a class="mobilesOnly" href="tel:+923244244934">Call Now : +92-324-4244934</a></p>
  </div>
  <!-- .site-header-social-menu --> 
</div>
<div class="page_featured">
  <div class="page_description_over"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="page_description">
          <h1>Contact Us</h1>
          We are always here to help out in whatever way we can. </div>
      </div>
    </div>
  </div>
</div>
<div class="hamburger_holder"> <span class="icon_menu" aria-hidden="true"></span> </div>

<div class="menu_holder">
  <div class="inner_holder">
    <div class="text-logo">
      <h3 class="logo_name"><img class="logo_for_dark_bg" src="{{url('/')}}/img/logo.png" alt="Pic Audience" /><img class="logo_for_light_bg" src="{{url('/')}}/img/logo.png" alt="Pic Audience" /></h3>
      
      <!-- <p class="logo_description">ECommerce, Agency &amp; Presentation Theme</p> --> 
    </div>
    <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
      <div class="menu-primary-menu-container">
        <ul class="primary-menu">
          <li><a href="{{url('/')}}/">Home</a></li>
          <li><a href="{{url('/')}}/aboutus">About</a></li>
          <li><a href="{{url('/')}}/service">Services</a></li>
          <!--<li><a href="{{url('/')}}/blog">The Blog</a></li>-->
          <li><a href="{{url('/')}}/portfolio">Portfolio</a></li>
          <li class="current-menu-item current_page_item"><a>Contact Us</a></li>
        </ul>
      </div>
    </nav>
    <!-- .main-navigation -->
    <div class="menu_footer">
      <!-- .social-navigation -->
       <p>Copyright © 2021-2022 <a href="{{url('/')}}/">PICAUDIENCE</a>. Design by <a href="https://greengrapez.com/"><img src="{{url('/')}}/img/greengrapez.png" alt="GreenGrapez"></a></p>
     </div>
  </div>
</div>
<div class="overlay"></div>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="contacts" class="row light_bg full-height align-items-center d-flex contact-1">
      <div class="container">
        <div class="vc_column-inner">
          <div class="row">
            <div class="col-md-6">
              <div class="vc_column-inner">
                <div class="oi_vc_text item_height_x2 contact-1-1">
                  <div class="oi_vc_text_span">
                    <div class="oi_custom_heading_holder">
                      <div class="oi_vc_heading oi_border_position_center">
                        <h1 class="oi_icon_titile">CONTACT US</h1>
                        <div class="oi_heading_border oi_border_position_center"><span></span></div>
                        <p class="oi_icon_sub_titile">Give us a call, send us an email or a letter - or drop by to have a chat. We are always here to help out in whatever way we can.</p>
                      </div>
                    </div>
                    <div role="form" class="wpcf7">
					  <form  method="post" action ="{{url('/')}}/contact" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div>
            @endif
						<div class="row text-left">
						  <div class="col-md-6">
							<input class="form-name" type="text" name="name" value="" size="40" placeholder="NAME" />
						  </div>
						  <div class="col-md-6">
							<input class="form-email" type="email" name="email" value="" size="40" placeholder="E-MAIL" />
						  </div>
						  <div class="col-md-12">
							<input class="form-subject" type="text" name="subject" value="" size="40" placeholder="SUBJECT" />
						  </div>
						  <div class="col-md-12">
							<textarea class="form-message" name="note" cols="5" rows="2" placeholder="MESSAGE"></textarea>
						  </div>
						  <div class="col-md-12">
							<p class="text-center mb-0">
							  <input class="send-form" type="submit" value="SEND MESSAGE" />
							</p>
						  </div>
						</div>
					  </form>
					</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="vc_column-inner ">
                <div class="oi_vc_text item_height_x2">
                  <div class="oi_vc_text_span text-center">
                    <h4 class="mb-4">CONTACT DETAILS</h4>
                    <ul class="contact-info">
                      <li>
                        <div><strong>PHONE</strong></div>
                        <p><a class="mobilesOnly" href="tel:+923244244934">+92-324-4244934</a></p>
                      </li>
                      <li>
                        <div><strong>EMAIL</strong></div>
                        <p><a href="mailto:support@picaudience.com">support@picaudience.com</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
  </main>
  <!-- .site-main --> 
  
</div>
<!-- .content-area -->

<div class="bottom_line">
  <div class="row">
    <div class="col-md-6">
      <p>Copyright © 2021-2022 <a href="{{url('/')}}/">PICAUDIENCE</a>. Design by <a href="https://greengrapez.com/"><img src="{{url('/')}}/img/greengrapez.png" alt="GreenGrapez"></a></p>
    </div>
    <div class="col-md-6">
      <nav aria-label="Footer Menu">
        <div class="menu-real-footer-menu-container">
          <ul id="menu-real-footer-menu" class="real_footer-menu">
            <li><a href="{{url('/')}}/">Home</a></li>
            <li><a href="{{url('/')}}/service">Serives</a></li>
            <li class="current-menu-item current_page_item"><a>Contact Us</a></li>
          </ul>
        </div>
      </nav>
      <!-- .social-navigation --> 
    </div>
  </div>
</div>
<script type="text/javascript" src="{{url('/')}}/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{url('/')}}/js/functions.js"></script>
</body>
</html>