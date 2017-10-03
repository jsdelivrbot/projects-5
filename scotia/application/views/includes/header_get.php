<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat Hub</title>
    <link href="<?= base_url('assets/get_help/css/styles.css'); ?>" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.jpg'); ?>" />
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/modernizr/modernizr.custom.js'); ?>"></script>
</head>

<body>

    <!--Smooth Scroll-->
    <div class="smooth-overflow">
        <!--Navigation-->

        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand text-blue" href="<?= site_url('welcome'); ?>" style="padding:0;"><img style="max-width:100%;" src="<?= base_url('assets/images/scotia-logo.png'); ?>" alt=""></a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" id="menuLogin"> <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Sign In</a>
                            <div class="dropdown-menu">
                                <form action="#" id="login-form" class="orb-form">
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

        <!--/Navigation--> 

        <!--MainWrapper-->
        <div class="main-wrap"> 


            <!--Main Menu-->
            <div class="responsive-admin-menu">
                <div class="responsive-menu">Scotia Bank Advice Hub
                    <div class="menuicon"><i class="fa fa-angle-down"></i></div>
                </div>
                <ul id="menu">
                    <li><a href="<?= site_url('navs/ConversationAdvisor'); ?>"><i class="fa fa-comments-o"></i> Conversations</a></li>
                    <li><a href="<?//= site_url('navs/Advisor'); ?>"><i class="fa fa-user-md"></i> Advisors</a></li>
                    <li><a href="<?//= site_url('navs/Goal'); ?>"><i class="fa fa-rocket"></i> Goals</a></li>
                    <li><a href="<?//= site_url('navs/GoalBuilder'); ?>"><i class="fa fa-rocket"></i> Goal Builder</a></li>
                    <li><a href="<?//= site_url('navs/Dream'); ?>"><i class="fa fa-barcode"></i>Dream</a></li>
                    <li><a href="<?//= site_url('navs/Task'); ?>"><i class="fa fa-check-square-o"></i> Tasks + Priorities</a></li>
                    <li><a href="<?//= site_url('navs/Working'); ?>"><i class="fa fa-check-square-o"></i> What's Working</a></li>
                    <li><a href="<?//= site_url('navs/Not'); ?>"><i class="fa fa-check-square-o"></i> What's Not</a></li>
                    <li><a href="<?//= site_url('navs/Coaching'); ?>"><i class="fa fa-check-square-o"></i> Coaching Approach</a></li>
                </ul>
            </div>