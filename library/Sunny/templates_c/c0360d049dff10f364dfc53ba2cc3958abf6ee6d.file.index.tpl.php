<?php /* Smarty version Smarty-3.1.12, created on 2013-04-21 19:41:25
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11165499425165eee05b6f70-86205847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1366537195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11165499425165eee05b6f70-86205847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5165eee0609786_59868545',
  'variables' => 
  array (
    'category' => 0,
    'cate' => 0,
    'query' => 0,
    'heading' => 0,
    'cate_name' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165eee0609786_59868545')) {function content_5165eee0609786_59868545($_smarty_tpl) {?><<?php ?>?php
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
			<li><a class="navtext" href="contact.php">Contact Us</a></li>
		</ul>
	    <form id="search" method="get" action="index.php">
			Search: <input type="text" name="query"> <input type="submit" value="Search">
		</form>
	</div>
	<div id="box">
		<br/>
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="0"){?>
			<h3><?php echo $_smarty_tpl->tpl_vars['cate_name']->value;?>
</h3>
			<?php }else{ ?>
			<h3>Items for '<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
'</h3>
			<?php }?>
		<?php }else{ ?>
			<h2>Latest Items</h2>
		<?php }?>
		    
		<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
		<div id="items">

				<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?> <!--Lists the 9 latest items added to the database-->
			   		<li class="item"><a href="item_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><img alt="tea" src="images/thumb.jpg"/><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>
</p></a></li>
				<?php } ?>
				</ul>
			<?php }else{ ?>
				<p>No items found.</p>
			<?php }?>

		</div>
		<div style="clear:both"></div>
	</div>

	<!-- footer navigation-->
	<div id="footer">
		<a class="footertext" href="faq.php">FAQ</a>
		<a class="footertext" href="index.php">Home</a>
		<a class="footertext" href="add_item.php">Add item</a>
	</div>
</body>
</html><?php }} ?>