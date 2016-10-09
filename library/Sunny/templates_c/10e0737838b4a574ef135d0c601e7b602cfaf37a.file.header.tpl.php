<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 15:09:35
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321865198c3dfdbbf95-18587534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1368968969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321865198c3dfdbbf95-18587534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5198c3dfddbf56_73067757',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'login' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5198c3dfddbf56_73067757')) {function content_5198c3dfddbf56_73067757($_smarty_tpl) {?><!doctype html>
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
&amp;heading=no"><?php echo $_smarty_tpl->tpl_vars['cate']->value['Name'];?>
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
						   	<li><a class="navtext" href="user_items.php">Items</a></li>							
						   	<li><a class="navtext" href="index.php?logout=true">Logout</a></li>
						</ul>
					</li>
				<?php }else{ ?>
					<li><a class="navtext" href="register.php">Register</a></li>
				<?php }?>
			</ul>
		    <form id="search" method="get" action="index.php">
				<span id="searchText">Search:</span> <input id="searchBar" type="text" name="query">
				<select id="searchOpt" name="category">
				<option value="All items">All items</option>
				<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['Id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['Name'];?>
</option>
				<?php } ?>
				</select>
				<input id="searchSub" type="submit" value="Search">
			</form>
		</div>
	</header>

	<div id="box"><?php }} ?>