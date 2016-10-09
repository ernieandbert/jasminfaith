<?php

require "includes/defs.php";

session_start();

if (isset($_POST['username'])) {
	$username = $_POST['username'];
} else {
	$username = "";
}

if (isset($_POST['password'])) {
	$password = $_POST['password'];
} else {
	$password = "";
}

if ($username && $password) {
	$result = login($username, $password);
}

if (isset($result) && $result) {
	$_SESSION['login'] = TRUE;
	$_SESSION['username'] = $username;
	$_SESSION['fname'] = $fname;
} else {
	$_SESSION['login'] = FALSE;
}

header("Location: index.php");
exit;



?>