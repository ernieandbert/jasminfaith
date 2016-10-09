<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 11:52:39
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:192283947754bb6a624f1f65-30592277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c6ec91f2b9d59bcb48506819be811889a5fd43e' => 
    array (
      0 => 'index.php',
      1 => 1421581948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192283947754bb6a624f1f65-30592277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bb6a6260c306_82807848',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bb6a6260c306_82807848')) {function content_54bb6a6260c306_82807848($_smarty_tpl) {?><?php echo '<?php'; ?>


require 'libs/Smarty.class.php';
require "includes/defs.php";

session_start();

$user = "";
if (isset($_GET['error'])) {
    $error = $_GET['error']; # for error reporting
} else {
    $error = "";
}

if (isset($_GET['logout'])) {
	unset($_SESSION['login']);
	unset($_SESSION['username']);
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


$smarty = new Smarty;
$smarty->assign("error", $error);
$smarty->assign("username", $username);
$smarty->assign("user", $user);
$smarty->assign("login", $login);
$smarty->display("index.tpl");
<?php echo '?>'; ?>
<?php }} ?>
