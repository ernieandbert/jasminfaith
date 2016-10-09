<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 19:41:56
         compiled from "./templates/item_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1578497191516b4ae6417916-82963559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42dead8a9632070fd5f182aa173d46480408a41' => 
    array (
      0 => './templates/item_detail.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578497191516b4ae6417916-82963559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516b4ae6479950_50704777',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'item' => 0,
    'catName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516b4ae6479950_50704777')) {function content_516b4ae6479950_50704777($_smarty_tpl) {?><<?php ?>?php
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
?> <!--dropdown menu for categories-->
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
		<div id="text-box">
			<img id="tea" src="images/tea.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
">
			<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</h1>
			<div class="text-border">
				<p><?php echo $_smarty_tpl->tpl_vars['item']->value['Summary'];?>
 <!--list item details-->

				<p><b>Price:</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>

				<p><b>Category:</b> <?php echo $_smarty_tpl->tpl_vars['catName']->value;?>

				</p>
				<p><b>Vendor:</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['Vendor'];?>

				<p>
			</div>
			<a class="deleteupdate" href="delete_item_action.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">Delete this item</a> <!--delete link-->
			<a class="deleteupdate" href="update_item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">Update this item</a> <!--update link-->
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