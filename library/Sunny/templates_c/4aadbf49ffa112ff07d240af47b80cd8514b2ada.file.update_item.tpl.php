<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 20:41:25
         compiled from "./templates/update_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5116367645173c255978d96-27947199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aadbf49ffa112ff07d240af47b80cd8514b2ada' => 
    array (
      0 => './templates/update_item.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5116367645173c255978d96-27947199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'error' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5173c255a05018_46905116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5173c255a05018_46905116')) {function content_5173c255a05018_46905116($_smarty_tpl) {?><<?php ?>?php
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
?> <!--Dropdown menu for categories-->
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
		<h2>Update item</h2>
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
		<?php }?>
		<form method="post" action="update_item_action.php">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">
			<table id="update_item">
				<tr><td>Name:</td> <td><input type="text" name="Name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
"> <br></td></tr>
				<tr>
					<td>
						Category:<!--dropdown for category options-->
					<td>
					<select name="Cate">
	  					<option>Black Tea</option>
	  					<option>Green Tea</option>
	  					<option>Oolong Tea</option>
	  					<option>White Tea</option>
					</select>
				</tr></td>
				<tr><td>Summary:</td> <td><textarea name="Summary"><?php echo $_smarty_tpl->tpl_vars['item']->value['Summary'];?>
</textarea> <br></td></tr>
				<tr><td>Vendor:</td> <td><input type="text" name="Vendor" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Vendor'];?>
"> <br></td></tr>
				<tr><td>Price:</td> <td><input type="text" name="Price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
"> <br></td></tr>
				<tr id="update_submit"><td><input type="submit" value="Update item"></td></tr>
			</table>
		</form>
	</div>

	<!-- footer navigation-->
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>