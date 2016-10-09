<?php

require 'libs/Smarty.class.php';
require "includes/defs.php";

session_start();

//error reporting
if (isset($_GET['error'])) {
	$error = $_GET['error'];
} else {
	$error = "";
}

// if logout unset all session variables
if (isset($_GET['logout'])) {
	unset($_SESSION['login']);
}
// is username set
if (isset($_SESSION['username']) && $_SESSION['username']) {
	$username = $_SESSION['username'];
	$fname = get_fname($username);
} else {
	$username = "";
	$fname = "";
}

// is login set
if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
} else {
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	$login = "";
}

$smarty = new Smarty;
$smarty->assign("error", $error);
$smarty->assign("username", $username);
$smarty->assign("login", $login);
$smarty->assign("fname", $fname);
$smarty->display("index.tpl");
?>