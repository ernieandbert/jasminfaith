<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 19:41:47
         compiled from "./templates/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:851440039517384ab757454-81335803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd592014428b705a43ae981c6cdccc2dacf5d95b5' => 
    array (
      0 => './templates/faq.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '851440039517384ab757454-81335803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517384ab7b7e74_46053726',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517384ab7b7e74_46053726')) {function content_517384ab7b7e74_46053726($_smarty_tpl) {?><<?php ?>?php
	include 'Smarty.class.php';
?<?php ?>>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jasmine Dragon</title>
	<link rel="stylesheet" type="text/css" href="css/styling.css" />
</head>
<body>
	<!-- navigation bar -->
	<div id="navbox">
		<img id="logo" src="images/JasmineDragon.png" alt="Jasmine Dragon">
		<ul>
			<li><a class="navtext" href="index.php">Home</a></li>
			<li><a class="navtext" href="about.php">About</a></li>
			<li><a class="navtext" href="#">Categories</a>
				
				<ul>
					<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?><!--dropdown menu for cetegories-->
					<li><a class="navtext" href="index.php?Cat_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['Id'];?>
&heading=no"><?php echo $_smarty_tpl->tpl_vars['cate']->value['Name'];?>
</a></li>
					<?php } ?>
				</ul>

			</li>
			<li><a class="navtext" href="contact.php">Contact Us</a></li>
		</ul>
	    <form id="search" method="get" action="index.php">
			Search: <input type="text" name="query"> <input type="submit" value="Search">
		</form>
	</div>
		<div id="box"> <!--Awesome FAQ-->
		<h2 id="faq">FAQ</h2>
		<br/>
		<p class="question">How can I be awesome like you guys?</p>
		<p class="answer">You  can't</p>
		<br/>
		<p class="question">You guys are so classy! How can I be as classy as you?</p>
		<p class="answer">I'm sorry, again you can't</p>
		<br/>
		<p class="question">Are you guys currently hiring?</p>
		<p class="answer">Do you like Jazz music?</p>
	</div>
	<!-- footer navigation-->
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>