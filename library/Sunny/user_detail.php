<?php

require 'libs/Smarty.class.php';
require "includes/defs.php";


session_start();

if (isset($_GET['error'])) {
    $error = $_GET['error']; # for error reporting
} else {
    $error = "";
}

if (isset($_SESSION['username']) && $_SESSION['username']) {
	$username = $_SESSION['username'];
	$user = get_user_details($username);
} else {
	$username = "";
}

if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
} else {
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	$login = "";
}

$capsUser = strtoupper($username);
$fname = $user[0];
$capsFName = strtoupper($fname);
$lname = $user[1];
$capsLName = strtoupper($lname);
$email = $user[2];
$capsEmail = strtoupper($email);

$smarty = new Smarty;
$smarty->assign("error", $error);
$smarty->assign("capsUser", $capsUser);
$smarty->assign("capsFName", $capsFName);
$smarty->assign("capsLName", $capsLName);
$smarty->assign("capsEmail", $capsEmail);
$smarty->assign("login",$login);
$smarty->assign("user",$user);
$smarty->assign("username", $username);
$smarty->display("user.tpl");
?>