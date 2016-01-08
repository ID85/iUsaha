<?php
	session_start();
	/*if(session_is_registered('admin')){
   		session_unset();
		session_destroy();
	}else {*/
	     header ('location:login.php');
	/*}*/
	
?>