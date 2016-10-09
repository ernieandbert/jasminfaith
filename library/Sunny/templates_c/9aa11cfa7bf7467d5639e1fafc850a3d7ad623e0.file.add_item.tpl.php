<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 19:41:52
         compiled from "./templates/add_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:364889438516b4ae8cf5203-52598477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa11cfa7bf7467d5639e1fafc850a3d7ad623e0' => 
    array (
      0 => './templates/add_item.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '364889438516b4ae8cf5203-52598477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516b4ae8d452f7_61626889',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516b4ae8d452f7_61626889')) {function content_516b4ae8d452f7_61626889($_smarty_tpl) {?><<?php ?>?php
include 'Smarty.class.php';
?<?php ?>>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOLO</title>
	<link rel="stylesheet" type="text/css" href="css/styling.css" />
</head>
<body>
	<div id="navbox">
		<img id="logo" src="images/JasmineDragon.png" alt="Jasmine Dragon">
		<ul>
			<li><a class="navtext" href="index.php">Home</a></li>
			<li><a class="navtext" href="about.php">About</a></li>
			<li><a class="navtext" href="#">Categories</a>
				
				<ul><!--dropdown menu for categories-->
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
		<h2>Add new item</h2>
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
		<?php }?>
		<form method="post" action="add_item_action.php"> <!--Form for entering in the data for the item being lsited-->
			<table id="add_item">
				<tr><td>Name:</td> <td><input type="text" name="Name"></td></tr>
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
				<tr><td>Summary:</td> <td><textarea name="Summary"></textarea></td></tr>
				<tr><td>Vendor:</td> <td><input type="text" name="Vendor"></td></tr>
				<tr><td>Price:</td> <td><input type="text" name="Price"></td></tr>
				<tr id="add_submit"><td colspan=2><input type="submit" value="Add item">
			</table>
		</form>
	</div>
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>