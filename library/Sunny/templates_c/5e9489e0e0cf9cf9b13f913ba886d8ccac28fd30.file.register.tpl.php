<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 05:15:16
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:723351943b04d35c40-48431664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1368846904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723351943b04d35c40-48431664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51943b04d8fa89_72026817',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51943b04d8fa89_72026817')) {function content_51943b04d8fa89_72026817($_smarty_tpl) {?><<?php ?>?php
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
		<form method="post" id="register" name="register" action="register_action.php" onsubmit="return validateRegister()"> <!--Form for entering in the data for the item being lsited-->
				<legend>Register</legend>
				<label> 
					<span>First Name:</span>
					<input type="text" name="regfname" placeholder="Streetlamp" /><span id="regfnameError"></span>
				</label>
				<label> 
					<span>Last Name:</span>
					<input type="text" name="reglname" id="lname" placeholder="Le Moose" /><span id="reglnameError"></span>
				</label>
				<label> 
					<span>Email:</span>			
					<input type="email" name="regemail" id="reg_email" placeholder="S.LeMoose@example.com" /><span id="regemailError"></span>
				</label>
				<label> 
					<span>Username:</span>
					<input type="text" name="regusername" id="reg_username" placeholder="Streetlamp" /><span id="regusernameError"></span>
				</label>
				<label> 
					<span>Password:</span>
					<input type="password" name="regpassword" id="reg_password" /><span id="regpasswordError"></span>
				</label>
				<input type="submit" value="Register" />
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