<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 09:41:49
         compiled from ".\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22624517350a9a40c04-93979010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c7775a602923e04c083cfc92a6baa248e9592aa' => 
    array (
      0 => '.\\templates\\contact.tpl',
      1 => 1368062604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22624517350a9a40c04-93979010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517350a9a871b9_72833804',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517350a9a871b9_72833804')) {function content_517350a9a871b9_72833804($_smarty_tpl) {?><<?php ?>?php
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
				
				<ul><!--drop down menu for categories-->
					<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
					<li><a class="navtext" href="index.php?Cat_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['Id'];?>
&heading=no"><?php echo $_smarty_tpl->tpl_vars['cate']->value['Name'];?>
</a></li>
					<?php } ?>
				</ul>

			</li>
			<li><a class="navtext" href="contact.html">Contact Us</a></li>
		</ul>
	    <form id="search" method="get" action="index.php">
			Search: <input type="text" name="query"> <input type="submit" value="Search">
		</form>
	</div>
	<div id="box">
		<h2>Contact Us</h2>
		<form>
			<fieldset id="contactinfo">
				<legend><span><Contact Information</span></legend>
				<label>
					Name 
					<input type="text" name="name" id="nameinput" placeholder="Streetlamp Le Moose">
				</label>
				<label>
					Email 
					<input type="email" name="email" id="emailinput" placeholder="LeMoose.Streetlamp@example.com">
				</label>
				<label>
					Phone 
					<input type="text" name="phone" id="phoneinput" placeholder="0409 000 000">
				</label>
			</fieldset>
			<fieldset id="query">
				<legend></legend>
				<label>
					<span id="query">How can we help you today?</span>
					</br>
					<textarea id="contactques" name="contactques" rows="4" cols="55"></textarea>
				</label>
			</fieldset>
			<fieldset id="submitbtn">
				<input type="submit" id="submit" value="submit" />
			</fieldset>
		</form>
	</div>
		<div style="clear:both"></div>
	</div>

	<!-- footer navigation-->
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>