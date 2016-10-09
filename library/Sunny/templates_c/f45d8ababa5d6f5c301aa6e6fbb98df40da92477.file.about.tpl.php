<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 19:41:28
         compiled from "./templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158820180351737a9e907493-89598083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45d8ababa5d6f5c301aa6e6fbb98df40da92477' => 
    array (
      0 => './templates/about.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158820180351737a9e907493-89598083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51737a9e962e34_29114845',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51737a9e962e34_29114845')) {function content_51737a9e962e34_29114845($_smarty_tpl) {?><<?php ?>?php
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
				
				<ul> <!--dropdown menu for each category-->
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
			<li><a class="navtext" href="contact.php">Contact Us</a></li>
		</ul>
	    <form id="search" method="get" action="index.php">
			Search: <input type="text" name="query"> <input type="submit" value="Search">
		</form>
	</div>
	<div id="box">
		<br/>
		<h2>About Us</h2>
		</br>
		<div id="about-box">
			<p>The Jasmine Dragon started out as a small tea business. Situated on the Gold Coast, we realised there weren't many specialty tea shops around this part of town and decided to rectify that. 
			The jasmine Dragon is our solution to the tea drought that has plagued the Gold Coast for many a year. Here we offer a wide variety of teas from around the world, imported from the source to keep cost
			down. If you can't find it chances are it's here. If its not, simply let us know and our staff will happily order it in as soon as possible for you.</p>
		</div>
	</div>

	<!-- footer navigation-->
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>