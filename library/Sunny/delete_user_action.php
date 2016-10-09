<?php
/*
* Delete's accounts with the given username
*/
session_start();

require 'libs/Smarty.class.php';
require "includes/defs.php";

$username = $_SESSION['username'];
delete_user($username);
unset($_SESSION['username']);

header("Location: index.php?logout=true");
exit;
?>