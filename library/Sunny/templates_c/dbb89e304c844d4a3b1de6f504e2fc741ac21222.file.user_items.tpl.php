<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 14:17:32
         compiled from ".\templates\user_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1649451961ba35e2185-44147076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb89e304c844d4a3b1de6f504e2fc741ac21222' => 
    array (
      0 => '.\\templates\\user_items.tpl',
      1 => 1368965842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649451961ba35e2185-44147076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51961ba364d896_65313883',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51961ba364d896_65313883')) {function content_51961ba364d896_65313883($_smarty_tpl) {?><<?php ?>?php
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
	<header>
		<div id="navbox">
			<img id="logo" src="images/JasmineDragon.png" alt="Jasmine Dragon">
			<ul>
				<li><a class="navtext" href="index.php">Home</a></li>
				<li><a class="navtext" href="about.php">About</a></li>
				<li><a class="navtext" href="#">Categories</a>			
					<ul><!--Dropdown menu for categories-->
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
				<?php if ($_smarty_tpl->tpl_vars['login']->value=='1'){?>
					<!--dropdown for users-->
					<li><a class="navtext" href="user_detail.php"><?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
</a>
						<ul>
							<li><a class="navtext" href="user_detail.php">Details</a></li>
						   	<li><a class="navtext" href="index.php?logout=true">Logout</a></li>
						   	<li><a class="navtext" href="user_items.php">Items</a></li>
						</ul>
					</li>
				<?php }else{ ?>
					<li><a class="navtext" href="register.php">Register</a></li>
				<?php }?>
			</ul>
		    <form id="search" method="get" action="index.php">
				Search: <input type="text" name="query"> <input type="submit" value="Search">
			</form>
		</div>
	</header>

	<div id="box">
		<div id="items">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   	<li class="item"><a href="user_items.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><img alt="tea" src="images/thumb.jpg"/><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>
</p></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<!-- footer navigation-->
	<footer>
		<div id="footer">
			<a class="footertext" href="faq.php">FAQ</a>
			<a class="footertext" href="index.php">Home</a>
			<?php if ($_smarty_tpl->tpl_vars['login']->value=='1'){?>
				<a class="footertext" href="add_item.php">Add item</a>
			<?php }?>
			<form id="login" action="login_action.php">
				<span id="username"><input type="text" name="username" value="" placeholder="username"/></span>
				<span id="password"><input type="password" name="password" placeholder="password" /></span>
				<span id="login_btn"><input type="submit" value="Submit" /></span>
			</form>
		</div>
	</footer>
</body>
</html><?php }} ?>