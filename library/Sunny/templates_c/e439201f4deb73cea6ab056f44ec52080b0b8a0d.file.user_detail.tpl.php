<?php /* Smarty version Smarty-3.1.13, created on 2013-05-17 10:31:37
         compiled from ".\templates\user_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:556951949739413638-06413110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e439201f4deb73cea6ab056f44ec52080b0b8a0d' => 
    array (
      0 => '.\\templates\\user_detail.tpl',
      1 => 1368779374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '556951949739413638-06413110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51949739470f13_61577089',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
    'username' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51949739470f13_61577089')) {function content_51949739470f13_61577089($_smarty_tpl) {?><<?php ?>?php
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
							<li><a class="navtext" href="#">Details</a></li>
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
		<form action="update_user.php"> <!--Form for entering in the data for the item being lsited-->
			<fieldset id="register">
				<legend><?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
's account details</legend>
				<label>
					<span><b>Username:</b> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
				</label>
				<label> 
					<span><b>First Name:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
</span>
				</label>
				<label> 
					<span><b>Last Name:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value['lname'];?>
</span>
				</label>
				<label> 
					<span><b>Email:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span>			
				</label>
				<input id="update_info" type="submit" value="Update" />
			</fieldset>
		</form>
		<br />
		<form action="delete_user_action.php"> <!--Form for entering in the data for the item being lsited-->
			<fieldset id="delete_user">
				<legend>Delete Account</legend>
				<input type="hidden" id="delete_user" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
				<input type="hidden" id="delete_email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
				<input id="delete_user_btn" type="submit" value="Delete Account" />
			</fieldset>
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