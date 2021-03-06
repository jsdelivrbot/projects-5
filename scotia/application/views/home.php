<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Scotia Advice Hub</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.jpg');?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/frontend.css');?>">
<script type="text/javascript" src="<?= base_url('assets/js/vendors/modernizr/modernizr.custom.js');?>"></script>
</head>

<body>
<div class="smooth-overflow frontend"> 
  
  <!--Navigation-->
  
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand text-blue" href="#" style="padding:0;"><img style="max-width:100%;" src="<?= base_url('assets/images/scotia-logo.png');?>" alt=""></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" id="menuLogin"> <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Sign In</a>
            <div class="dropdown-menu">
                <form action="<?= site_url('welcome');?>" id="login-form" class="orb-form">
                <fieldset>
                  <section>
                    <div class="row">
                      <div class="col col-12">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="email" name="email" placeholder="Login">
                        </label>
                      </div>
                    </div>
                  </section>
                  <section>
                    <div class="row">
                      <div class="col col-12">
                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                          <input type="password" name="password" placeholder="Password">
                        </label>
                        <div class="note"><a href="#" class="modal-opener">Forgot password?</a></div>
                      </div>
                    </div>
                  </section>
                  <section>
                    <div class="row">
                      <div class="col col-12">
                        <label class="checkbox">
                          <input type="checkbox" name="remember" checked>
                          <i></i>Keep me logged in</label>
                      </div>
                    </div>
                  </section>
                </fieldset>
                <button type="submit" class="btn btn-default">Sign in</button>
                <a href="registration.html" class="btn">Register</a>
              </form>
            </div>
          </li>
        </ul>
        <!--/Sign In Form--> 
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
  
  <!--/Navigation--> 
  
  
  <div class="container frontend">
    <div class="row">
      
      <!--Services-->
      
      <div class="col-md-12">
        <div class="header-splash-no-img bg-cold-grey">
          <div class="header-splash-intro">
            <h1>Welcome To Scotiabank</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae vehicula ligula. Nullam lacinia posuere augue, non maximus lectus pharetra et. Suspendisse finibus, sapien sit amet luctus posuere, quam tortor viverra augue, eu posuere metus metus nec nisi. Duis at semper dui. Suspendisse auctor ipsum arcu, iaculis rhoncus ex lacinia cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque ut est et mi feugiat euismod in et odio. Donec vel iaculis est. Cras nec quam a velit lobortis scelerisque. Ut condimentum vel nisl ac iaculis. </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 text-center">
          <a href="<?= site_url('navs/ConversationAdvisor');?>" class="btn btn-primary btn-lg cart tooltiped" style="min-width:80%; font-size:28px; margin-bottom:20px; line-height:50px;" role="button" title="" data-original-title="If You want to get any help from our experties"><i class="entypo-users"></i>  Get Help</a>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 text-center">
        <a href="<?= site_url('navs/ConversationClient');?>" class="btn btn-success btn-lg cart tooltiped" style="min-width:80%; font-size:28px; margin-bottom:20px; line-height:50px;" role="button" title="" data-original-title="If Youn are an expert and want to give help"><i class="fa fa-user-md"></i>  Give Help</a>
      </div>
      <div class="clearfix"></div>
      <!--/Services--> 
      
      
      
      
      <!-- /Content--> 
    </div>
  </div>
  <!-- Page Ends -->
  
  <!--Footer-->
  <div class="footer">
    
    <div class="col-md-12 margin-top">
      <p class="text-center">Copyright &copy; 2017 All right reserved<strong>Scotia Bank</strong></p>
    </div>
    
    <!-- Social Media Buttons - CSS3 - Free to Remove Unneeded -->
    <div class="social-buttons">
      <ul class="social">
        <li><a href="http://facebook.com/"><i class="entypo-facebook-circled"></i></a></li>
        <li><a href="http://linkedin.com/"><i class="entypo-linkedin-circled"></i></a></li>
        <li><a href="http://google.com/"><i class="entypo-gplus-circled"></i></a></li>
        <li><a href="http://twitter.com/"><i class="entypo-twitter-circled"></i></a></li>
        <li><a href="http://pinterest.com/"><i class="entypo-pinterest-circled"></i></a></li>
        <li><a href="http://tumblr.com/"><i class="entypo-tumblr-circled"></i></a></li>
        <li><a href="http://stumbleupon.com/"><i class="entypo-stumbleupon-circled"></i></a></li>
        <li><a href="http://dribble.com/"><i class="entypo-dribbble-circled"></i></a></li>
        <li><a href="http://vimeo.com/"><i class="entypo-vimeo-circled"></i></a></li>
        <li><a href="http://mixi.com/"><i class="entypo-mixi"></i></a></li>
        <li><a href="http://lastfm.com/"><i class="entypo-lastfm-circled"></i></a></li>
        <li><a href="http://instagram.com/"><i class="entypo-instagram"></i></a></li>
        <li><a href="http://vk.com/"><i class="entypo-vkontakte"></i></a></li>
        <li><a href="http://flickr.com/"><i class="entypo-flickr-circled"></i></a></li>
      </ul>
    </div>
    <!--/Social Buttons--> 
  </div>
  <!--Footer--> 
</div>

<!-- scroll top -->
<div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
<!-- /scroll top --> 

<!--Scripts-->
<script type="text/javascript" src="<?= base_url('assets/js/vendors/jquery/jquery.min.js');?>"></script> 

<!--BS-->
<script type="text/javascript" src="<?= base_url('assets/js/vendors/bootstrap/bootstrap.min.js');?>"></script>

<!--Quotes Rotator--> 
<script type="text/javascript" src="<?= base_url('assets/js/vendors/quotes-rotator/jquery.cbpQTRotator.min.js');?>"></script> 

<!--Forms--> 
<script type="text/javascript" src="<?= base_url('assets/js/vendors/forms/jquery.form.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('assets/js/vendors/forms/jquery.validate.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('assets/js/vendors/forms/jquery.maskedinput.min.js');?>"></script> 


<!--Main Script--> 
<script type="text/javascript" src="<?= base_url('assets/js/frontend.js');?>"></script>

</body>
</html>
