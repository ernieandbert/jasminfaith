<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 13:25:29
         compiled from ".\templates\bids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14977519854f2ad4ec2-13161289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b7dd5b83c93ef86e77d72a718beba19a8c91081' => 
    array (
      0 => '.\\templates\\bids.tpl',
      1 => 1368962728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14977519854f2ad4ec2-13161289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519854f2b35cf3_92694025',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
    'bids' => 0,
    'bid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519854f2b35cf3_92694025')) {function content_519854f2b35cf3_92694025($_smarty_tpl) {?><<?php ?>?php
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
		<p id="bidHistory">Bidding History</p>
		<div id="bidHistoryBox">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['bid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bid']->key => $_smarty_tpl->tpl_vars['bid']->value){
$_smarty_tpl->tpl_vars['bid']->_loop = true;
?>
					<li><a href="#">$<?php echo $_smarty_tpl->tpl_vars['bid']->value['bidPrice'];?>
</a></li>
					<br />
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