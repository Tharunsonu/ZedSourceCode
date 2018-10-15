<!-- Copyright 2018 CompoundCode

	You are permited to alter this programme provided that you leave this statement unchanged.
	#This code was written, designed and maitained by mwanza J. Blessed
	#email: Mwanzabj@gmail.com
	#cell: +260-971-943-638 
	#facebook: www.facebook.com/blessedjasonmwanza 
	#git: www.github.com/blessedjasonmwanza
	#you are permited to copy or change any of the contents of this code/programm by law!
	#please contact the owner for permission

	##
	Find this project here::: https://github.com/blessedjasonmwanza/ZedSourceCode
 -->
<?php
error_reporting(E_ERROR | E_PARSE);
define('DOCUMENT_ROOT', dirname(realpath(__FILE__)).'/');
require 'incs/config.php';
find_server();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Zed Source Code
	</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="shortcut icon" href="logo.jpg" />
</head>
<body>
<center>
	<header>
		<img src="logo.jpg" alt="ZcS" title="Zed Source Code"> <code> 12:23 - 13/may/2018</code>
		<nav>
			<a href="#"><i class="fa fa-home" title="Home" alt="Home"></i></a>
			<a href="#"> <i class="fa fa-comments"  title="Chart" alt="Chart"></i> </a>
			<a href="#"><i class="fa fa-download"  title="Resources" alt="Resources"></i> </a>
			<a href="#"> <i class="fa fa-external-link-square-alt"  title="Leaks" alt="Leaks"></i></a>
			<a href="#"> <i class="fa fa-newspaper"  title="News" alt="News" ></i></a>
			<a href="#"><i class="fa fa-project-diagram"  title="Projects" alt="Projects"></i></a>
			<a href="#"><i class="fa fa-sign-in-alt"  title="Login" alt="Login"></i></a>
		</nav>
	</header>
</center>
<main>
	<form>
		<i class="fa fa-at" style="color:#fff;"></i> <input type="email" name="email" placeholder="email" alt="Email" title="Enter Email">
		<i class="fa fa-key" style="color:#fff;"></i> <input type="password" name="password" placeholder="password" alt="Password" title=" Enter Password">
		<button type="submit"> <i class="fa fa-user-plus"></i> Sign Up </button>
	</form>
</main>
</body>
</html>