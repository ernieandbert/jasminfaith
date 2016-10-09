<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 06:18:10
         compiled from ".\templates\add_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172075167858e14d411-14863931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a0fde870afa7cab3317a232601eec563720984' => 
    array (
      0 => '.\\templates\\add_item.tpl',
      1 => 1368850489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172075167858e14d411-14863931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5167858e18b2b1_50395396',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
    'error' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5167858e18b2b1_50395396')) {function content_5167858e18b2b1_50395396($_smarty_tpl) {?><<?php ?>?php
include 'Smarty.class.php';
?<?php ?>>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOLO</title>
	<link rel="stylesheet" type="text/css" href="css/styling.css" />
	<script src="js/validate.js" type="text/javascript"></script>
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
		<h2>Add new item</h2>
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
		<?php }?>
		<form method="post" action="add_item_action.php" name="add" onsubmit="return validateAddItem()"> <!--Form for entering in the data for the item being lsited-->
			<table id="add_item">
				<tr><td>Name:</td> <td><input type="text" name="AddName"><span id="addnameError"></span></td></tr>
				<tr>
					<td>
						Category:
					<td>
					<select name="cate">
	  					<option>Black Tea</option>
	  					<option>Green Tea</option>
	  					<option>Oolong Tea</option>
	  					<option>White Tea</option>
					</select>
				</tr></td>
				<tr><td>Summary:</td> <td><textarea name="AddSummary"></textarea><span id="addsummaryError"></span></td></tr>
				<tr><td>Vendor:</td> <td><input type="text" name="AddVendor" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"><span id="addvendorError"></span></td></tr>
				<tr><td>Price:</td> <td><input type="text" name="AddPrice"><span id="addpriceError"></span></td></tr>
				<tr id="add_submit"><td colspan=2><input type="submit" value="Add item">
			</table>
		</form>
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