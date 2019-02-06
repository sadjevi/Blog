<?php 

session_start();

if(!isset($_SESSION['auth']) || !$_SESSION['auth'])
{
	die('erreur');
}
?>