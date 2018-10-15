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
	Find this project here::: https://github.com/blessedjasonmwanza/ZedSourceCode -->
<?php
define("BASE_PATH", dirname(__FILE__));
function find_server(){

	define('dbserver', '127.0.0.1');
	define('dbuser', 'root@localhost');
	define('dbpass', '');
	define('db', 'zcs');
	if ($conn = mysqli_connect(dbserver, dbuser, dbpass)) {
		if(mysqli_select_db($conn, db)){
		}else{
			$err = "Database not found.";
			echo $err;
		}
	}else{
		$err = "Connection to the server has failed.";
			echo $err;
	}
}
function get_time($value){
switch ($value) {
	case $value == 'all':
		$time = time('i').' - '.date('D'.' '.'M'.' '.'Y');
		break;
	
	default:
		$time = time('i');
		break;
	}
}
?>