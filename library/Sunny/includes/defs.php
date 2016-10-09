<?php

include "db_defs.php";

// add a new user
function add_user($username, $email, $password, $fname, $lname) {
    // Sanitise input data
    $connection = mysql_open();

    $username = mysql_escape_string($username);
    $email = mysql_escape_string($email);
    $password = mysql_escape_string($password);
    $fname = mysql_escape_string($fname);
    $lname = mysql_escape_string($lname);

    //add salt since the function is salt reduced (and no one likes salt reduced)
    $salt = substr($username, 0, 2);
    $storedPassword = crypt($password, $salt);

    $query = "insert into Users (username, email, password, fname, lname) ".
             "values ('$username','$email','$storedPassword','$fname','$lname')";
    $results = mysql_query($query,$connection) or show_error();
    $id = mysql_insert_id();

    mysql_close($connection) or show_error();
    return $id;
}

// update user details
function update_user($username, $email, $password, $fname, $lname) {
    // Sanitise input data
    $connection = mysql_open();

    $username = mysql_escape_string($username);
    $email = mysql_escape_string($email);
    $password = mysql_escape_string($password);
    $fname = mysql_escape_string($fname);
    $lname = mysql_escape_string($lname);

    //add salt since the function is salt reduced (and no one likes salt reduced)
    $salt = substr($username, 0, 2);
    $storedPassword = crypt($password, $salt);

    $query = "update Users ".
    "set username = '$username', email = '$email', password = '$storedPassword', fname = '$fname', lname = '$lname' " .
    "where username = '$username'";

    $result = mysql_query($query, $connection) or show_error();
    mysql_close($connection) or show_error();
}

//delete a user
function delete_user($username) {
    $connection = mysql_open();
    $query = "delete from Users where username = '$username'";
    $result = mysql_query($query, $connection) or die('error: ' . mysql_error());
    mysql_close($connection) or show_error();
}

// let a user login
function login($username, $password) {
    $connection = mysql_open();

    if (! isset($username) || ! isset($password))
        return false;
    $salt = substr($username, 0, 2);
    $encryptedPassword = crypt($password, $salt);

    $query = "select username, fname, password from Users where username = '$username' AND password = '$encryptedPassword' limit 1 ";
    $result = mysql_query($query, $connection) or show_error();

    if (mysql_num_rows($result) < 1) {
        return false;
    } else {
        return true;
    }

    mysql_close($connection) or show_error();
}

// get user detail information
function get_user_details ($username) {
    $connection = mysql_open();

    $query = "select fname, lname, email from Users where username = '$username'";
    $result = mysql_query($query,$connection) or show_error();

    if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result: $query\n";
        die();
    }
    $item = mysql_fetch_array($result);

    mysql_close($connection) or show_error();
    return $item;
}


?>