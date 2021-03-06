<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>D-Mo</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('images/bg logo icon arch only small blue on white bg.jpg'); ?>" />
<link id="main-style" href="<?= base_url('css/styles.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('css/font-awesome.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<style>
    #new{
		dispaly:none;
	}
</style>
<script type="text/javascript" src="<?= base_url('js/vendors/modernizr/modernizr.custom.js');?>"></script>
</head>

<body style="background:#efefef;">

<!--Smooth Scroll-->
<div class="smooth-overflow"> 
  <!--Navigation-->
  <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="<?= site_url('welcome/dashboard')?>"><span class="text-blue"><img width="70px" src="<?= base_url('images/bg logo blue on white better.jpg');?>" /></span></a> 
    
    <!--Search-->
    <div class="site-search">
      <form action="#" id="inline-search">
        <i class="fa fa-search"></i>
        <input type="search" placeholder="Search">
      </form>
    </div>
    
    <!--Navigation Itself-->
    
    <div class="navbar-content"> 
      
      <!--Sidebar Toggler--> 
      <a href="#" class="btn btn-default left-toggler"><i class="fa fa-bars"></i></a> 
      <!--Right Userbar Toggler--> 
      <a href="#" class="btn btn-user right-toggler pull-right"><i class="entypo-vcard"></i> <span class="logged-as hidden-xs">Logged as</span><span class="logged-as-name hidden-xs">Anton Durant</span></a> 
      <!--Fullscreen Trigger-->
      <button type="button" class="btn btn-default hidden-xs pull-right" id="toggle-fullscreen"> <i class=" entypo-popup"></i> </button>
      
      <!--Settings Dropdown-->
      <div class="btn-group pull-right">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <i class="entypo-cog"></i></button>
        <div id="settings-dropdown" class="dropdown-menu keep_open orb-form">
          <div class="dropdown-header">Settings <span class="badge pull-right">6</span></div>
          <div class="dropdown-container">
            <div class="nano">
              <div class="nano-content">
                <ul class="settings-dropdown">
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Prevent Midnblow</label>
                  </li>
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Sleep All nights</label>
                  </li>
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Drink more Coffee</label>
                  </li>
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Auto feed cat</label>
                  </li>
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Dummy Checkbox</label>
                  </li>
                  <li>
                    <label class="toggle">
                      <input type="checkbox" name="checkbox-toggle" checked>
                      <i></i>Read More Books</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="dropdown-footer"> <a class="btn btn-dark" href="#">Save</a> </div>
        </div>
      </div>
      
      <!--Lock Screen--> 
      <!--<a href="#" data-toggle="modal" class="btn btn-default hidden-xs pull-right lockme"> <i class="entypo-lock"></i> </a> -->
      
      <!--Notifications Dropdown-->
      
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <i class="entypo-megaphone"></i><span class="new"></span></button>
        <div id="notification-dropdown" class="dropdown-menu">
          <div class="dropdown-header">Notifications <span class="badge pull-right">8</span></div>
          <div class="dropdown-container">
            <div class="nano">
              <div class="nano-content">
                <ul class="notification-dropdown">
                  <li class="bg-warning"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Server Down</h4>
                    <p>Server #435 was shut down (Power loss)</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 59 mins ago</span> </a> </li>
                  <li class="bg-info"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Too Many Connections</h4>
                    <p>Too many connections to Database Server</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 2 hours ago</span> </a> </li>
                  <li class="bg-danger"><a href="#"> <span class="notification-icon"><i class="fa fa-android"></i></span>
                    <h4>Sausage Stolen</h4>
                    <p>Someone stole your hot sausage</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> </a> </li>
                  <li class="bg-success"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Defragmentation Completed</h4>
                    <p>Disc Defragmentation Completed on Server</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="dropdown-footer"><a class="btn btn-dark" href="#">See All</a></div>
        </div>
      </div>
      
      <!--Inbox Dropdown-->
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="entypo-mail"></i><span class="new"></span></button>
        <div id="inbox-dropdown" class="dropdown-menu inbox">
          <div class="dropdown-header">Inbox <span class="badge pull-right">32</span></div>
          <div class="dropdown-container">
            <div class="nano">
              <div class="nano-content">
                <ul class="inbox-dropdown">
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
                    <h4>Why don't u answer calls?</h4>
                    <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 59 mins ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
                    <h4>Rawrr, rawrrr...</h4>
                    <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 2 hours ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
                    <h4>Why so serious?</h4>
                    <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="dropdown-footer"><a class="btn btn-dark" href="admin-inbox.html">Save All</a></div>
        </div>
      </div>
    </div>
  </nav>
  
  <!--/Navigation--> 
  
  <!--MainWrapper-->
  <div class="main-wrap"> 
    
    <!--OffCanvas Menu -->
    <aside class="user-menu"> 
      
      <!-- Tabs -->
      <div class="tabs-offcanvas">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#userbar-one" data-toggle="tab">Main</a></li>
          <li><a href="#userbar-two" data-toggle="tab">Users</a></li>
          <li><a href="#userbar-three" data-toggle="tab">ToDo</a></li>
        </ul>
        <div class="tab-content"> 
          
          <!--User Primary Panel-->
          <div class="tab-pane active" id="userbar-one">
            <div class="main-info">
              <div class="user-img"><img src="http://placehold.it/150x150" alt="User Picture" /></div>
              <h1>Anton Durant <small>Administrator</small></h1>
            </div>
            <div class="list-group"> <a href="#" class="list-group-item"><i class="fa fa-user"></i>Profile</a> <a href="#" class="list-group-item"><i class="fa fa-cog"></i>Settings</a> <a href="#" class="list-group-item"><i class="fa fa-flask"></i>Projects<span class="badge">2</span></a>
              <div class="empthy"></div>
              <a href="#" class="list-group-item"><i class="fa fa-refresh"></i>Updates<span class="badge">5</span></a> <a href="#" class="list-group-item"><i class="fa fa-comment"></i>Messages<span class="badge">12</span></a> <a href="#" class="list-group-item"><i class="fa fa-comments"></i> Comments<span class="badge">45</span></a>
              <div class="empthy"></div>
             <!-- <a href="#" data-toggle="modal" class="list-group-item lockme"><i class="fa fa-lock"></i> Lock</a>--> <a data-toggle="modal" href="<?= site_url('welcome');?>" class="list-group-item goaway"><i class="fa fa-power-off"></i> Sign Out</a> </div>
          </div>
          
          <!--User Chat Panel-->
          <div class="tab-pane" id="userbar-two">
            <div class="chat-users-menu"> 
              <!--Adding Some Scroll-->
              <div class="nano">
                <div class="nano-content">
                  <div class="buttons">
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default">Friends</button>
                      <button type="button" class="btn btn-default">Work</button>
                      <button type="button" class="btn btn-default">Girls</button>
                    </div>
                  </div>
                  <ul>
                    <li><a href="#"><span class="chat-name">Gluck Dorris</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span><span class="badge">5</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                    <li><a href="#"><span class="chat-name">Mr. Joker</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Chewbacca</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">The Piggy</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!--User Tasks Panel-->
          <div class="tab-pane" id="userbar-three">
            <div class="nano"> 
              <!--Adding Some Scroll-->
              <div class="nano-content">
                <div class="small-todos">
                  <div class="input-group input-group-sm">
                    <input id="new-todo" placeholder="Add ToDo" type="text" class="form-control">
                    <span class="input-group-btn">
                    <button id="add-todo" class="btn btn-default" type="button"><i class="fa fa-plus-circle"></i></button>
                    </span> </div>
                  <section id="task-list">
                    <ul id="todo-list">
                    </ul>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- /tabs --> 
      
    </aside>
    <!-- /Offcanvas user menu--> 
    
