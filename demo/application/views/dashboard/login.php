<!DOCTYPE html>
<html>
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
        <link href="<?= base_url('css/login.css') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <style>
            #new{
                dispaly:none;
            }
        </style>
        <script type="text/javascript" src="<?= base_url('js/vendors/modernizr/modernizr.custom.js'); ?>"></script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <form action="<?= site_url('welcome/login');?>" method="post">
                    <div class="col-md-offset-5 col-md-4">
                        <div class="form-login">
                            <h4>Sign In.</h4>
                            <input type="text" id="userName" name="user_name" class="form-control input-sm chat-input" placeholder="username" />
                            </br>
                            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
                            </br>
                            <div class="wrapper">
                                <span class="group-btn">     
                                    <button type="submit" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></button>
                                </span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>