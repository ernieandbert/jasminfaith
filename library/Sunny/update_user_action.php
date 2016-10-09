<?php

require 'libs/Smarty.class.php';
require "includes/defs.php";

#get form data
$username = $_POST['username'];
$email = $_POST['updemail'];
$password = $_POST['updpassword'];
$fname = $_POST['updfname'];
$lname = $_POST['updlname'];

#perform update with data
update_user($username, $email, $password, $fname, $lname);

header("Location: user_detail.php?username=$username");
exit;
?>