<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 05:29:31
         compiled from ".\templates\update_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476551958e5f9cab11-32128871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b25f6f595f41157a53958018a1623e5d92e5d8a' => 
    array (
      0 => '.\\templates\\update_user.tpl',
      1 => 1368847641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476551958e5f9cab11-32128871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51958e5fa3b887_64150293',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51958e5fa3b887_64150293')) {function content_51958e5fa3b887_64150293($_smarty_tpl) {?><<?php ?>?php
	include 'Smarty.class.php';
?<?php ?>>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jasmine Dragon</title>
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
		<form method="post" name="update" id="register" action="update_user_action.php" onsubmit="return validateUpdate()"> <!--Form for entering in the data for the item being lsited-->
				<legend>Update Account Details</legend>
				<label>
					<input type="hidden" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
				</label>
				<label> 
					<span>First Name:</span>
					<input type="text" name="updfname" id="fname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
" /><span id="updfnameError"></span>
				</label>
				<label> 
					<span>Last Name:</span>
					<input type="text" name="updlname" id="lname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lname'];?>
" /><span id="updlnameError"></span>
				</label>
				<label> 
					<span>Email:</span>			
					<input type="email" name="updemail" id="reg_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" /><span id="updemailError"></span>
				</label>
				<label> 
					<span>Password:</span>
					<input type="password" name="updpassword" id="upd_password" /><span id="updpasswordError"></span>
				</label>
				<input type="submit" value="Update" />
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