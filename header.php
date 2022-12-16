<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tech Blog Website</title>
<meta name="keywords" content="free css template, XHTML, CSS, food blog template" />
<meta name="description" content="Food Blog Template - free CSS website layout, XHTML CSS template" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!--  Designed by w w w . t e m p l a t e m o . c o m  --> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div id="templatemo_background_section_top">
	  <div class="templatemo_container">
	    <div id="templatemo_header">
	      <div id="templatemo_logo_section">
	      <img src="images/Screenshot__16_-removebg-preview.png" alt="logo" height="70px" width="70px">         
				</div>
               
    </div><!-- end of headder -->

	<?php
	$pagename =  basename($_SERVER['PHP_SELF']);
	?>
                
    		<div id="templatemo_menu_panel">
            
    			<div id="templatemo_menu_section">
                
            		<ul>
						<?php 
						if($pagename=="home.php")
						{
						?>
		                <li><a href="home.php" class="current">Home</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="home.php">Home</a></li>
						<?php
						}
						?>

        		        
						<?php 
						if($pagename=="register.php")
						{
						?>
		                <li><a href="register.php" class="current">Register</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="register.php">Register</a></li>
						<?php
						}
						?>

						<?php 
						if($pagename=="login.php")
						{
						?>
		                <li><a href="login.php" class="current">Login</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="login.php">Login</a></li>
						<?php
						}
						?>
		                
		                <?php 
						if($pagename=="addpost.php")
						{
						?>
		                <li><a href="addpost.php" class="current">Add Post</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="addpost.php">Add Post</a></li>
						<?php
						}
						?>
						
						<?php 
						if($pagename=="allpost.php")
						{
						?>
		                <li><a href="allpost.php" class="current">All Post</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="allpost.php">All Post</a></li>
						<?php
						}
						?>

						<?php 
						if($pagename=="donate.php")
						{
						?>
		                <li><a href="donate.php" class="current">Donate</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="donate.php">Donate</a></li>
						<?php
						}
						?>
        		         
						 <?php 
						if($pagename=="contact.php")
						{
						?>
		                <li><a href="contact.php" class="current">Contact</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="contact.php">Contact</a></li>
						<?php
						}
						?>


						<?php 
						if($pagename=="adminlogin.php")
						{
						?>
		                <li><a href="adminlogin.php" class="current">Admin Login</a></li>
						<?php
						}
						else 
						{
							?>
		                <li><a href="adminlogin.php">Admin Login</a></li>
						<?php
						}
						?>


						<!-- Redirect to logout page -->

						<?php

						// for hiding warning
						error_reporting(0); 

						session_start();
						if($_SESSION['mysession']){
							?>
						<li><a href="logout.php">Logout</a></li>
						<?php
						}
						?>

		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->