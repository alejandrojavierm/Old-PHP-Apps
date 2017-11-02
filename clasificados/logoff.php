<?php
session_start();
/*********************************************************
			This Free Script was downloaded at			
			Free-php-Scripts.net (HelpPHP.net)			
	This script is produced under the LGPL license		
		Which is included with your download.			
	Not like you are going to read it, but it mostly	
	States that you are free to do whatever you want	
				With this script!						
*********************************************************/

//site defines
$LOGOUT_PAGE = 'login.php';

$_SESSION['isloged'] = NULL;
$_SESSION['username'] = NULL;
// End All Session ID'S
$_SESSION = array();
// KILL ALL SESSIONS
session_destroy();
//Redirect user out
header("Location: $LOGOUT_PAGE");
exit();
?>