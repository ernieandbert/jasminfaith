<?php /* Smarty version Smarty-3.1.13, created on 2013-04-21 02:03:58
         compiled from ".\templates\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:797151732adbab44f7-45464803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8d5e7c56e6e5abaed147561ae75e91b2c83948' => 
    array (
      0 => '.\\templates\\category.tpl',
      1 => 1366502637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797151732adbab44f7-45464803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51732adbb09909_84281849',
  'variables' => 
  array (
    'Cat_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51732adbb09909_84281849')) {function content_51732adbb09909_84281849($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOLO</title>
	<link rel="stylesheet" type="text/css" href="css/styling.css" />
</head>
<body>
	<div id="navbox">
		  <a class="navtext" href="index.php">Home</a>
		  <a class="navtext" href="about.html">About</a>
		  <a class="navtext" href="contact.html">Contact Us</a>
		  <a class="navtext" href="category.php">Categories</a>
		  <form id="search" method="get" action="item_list.php">
		  	Search: <input type="text" name="query"> <input type="submit" value="Search">
		  </form>
		  <img id="logo" src="../images/JasmineDragon.png" alt="Jasmine Dragon">
	</div>
	<div id="box">
		<h2>Categories</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['Cat_id']->value;?>
</p>
	</div>

	<div id="footer">
		<a class="footertext" href="faq.html">FAQ</a>
		<a class="footertext" href="index.html">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>