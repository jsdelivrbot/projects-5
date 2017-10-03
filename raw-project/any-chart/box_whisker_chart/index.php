<?php
// Start the session
//session_destroy(); 
session_start();
if (isset($_POST['submit'])) {
	$submitedpass = $_POST['pass'];
	$pass = "paris";
	if($pass == $submitedpass){
		$_SESSION["status"] = 1;
		}
}

$status = $_SESSION["status"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Lordier</title>
        <link rel="stylesheet" href="../../css/mystyle.css" />
    </head>

    <body>
    <?php if($status != 1){?>
	<div class="wrapper-log">
        <div class="wrapper">
            <form method="post" class="main-form">
            	<h2>Privé</h2>
                <input type="password" name="pass" class="mypass" placeholder="Please enter your password.." />
                <input type="submit" name="submit" value="Soumettre" class="mylog" />
            </form>
            
        </div>
    </div>
    <?php } else{?>
        <div class="wrapper">
            <h1><span>Box Whisker Chart</span></h1>
            <div class="object-item">
                <div class="object-title">
                    V1
                </div>
                <div class="object-link">
                    <a href="v1/Box and Whisker Chart.html" >View</a>
              
                </div>
            </div>
   			<div class="object-item">
                <div class="object-title">
                    V2
                </div>
                <div class="object-link">
                    <a href="v2" >View</a>
              
                </div>
            </div>
<div class="object-item">
                <div class="object-title">
                    V3
                </div>
                <div class="object-link">
                    <a href="v3" >View</a>
              
                </div>
            </div>
<div class="object-item">
                <div class="object-title">
                    V4
                </div>
                <div class="object-link">
                    <a href="v4" >View</a>
              
                </div>
            </div>
            
        </div>
    <?php }?>   
    </body>
</html>
