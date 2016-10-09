<?php
/*
* Adds new item from form data.
*/
require 'libs/Smarty.class.php';
require "includes/defs.php";

# Get form data
$username = $_POST['regusername'];
$email = $_POST['regemail'];
$password = $_POST['regpassword'];
$fname = $_POST['regfname'];
$lname = $_POST['reglname'];

# add new item with form data
$id = add_user($username, $email, $password, $fname, $lname);

header("Location: index.php"); 
exit;
?>