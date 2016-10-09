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
	$fname = "";
}

if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
} else {
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	$login = "";
}

if (isset($_GET['logout'])) {
	unset($_SESSION['login']);
}

$smarty = new Smarty;
$smarty->assign("error", $error);
$smarty->assign("username", $username);
$smarty->assign("user", $user);
$smarty->assign("login", $login);
$smarty->display("update_user.tpl");
?>