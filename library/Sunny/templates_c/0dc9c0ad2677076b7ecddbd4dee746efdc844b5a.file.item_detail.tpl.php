<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 14:25:27
         compiled from ".\templates\item_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1707651665045910c93-41935380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc9c0ad2677076b7ecddbd4dee746efdc844b5a' => 
    array (
      0 => '.\\templates\\item_detail.tpl',
      1 => 1368966152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707651665045910c93-41935380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51665045966470_91712875',
  'variables' => 
  array (
    'item' => 0,
    'login' => 0,
    'catName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51665045966470_91712875')) {function content_51665045966470_91712875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="text-box">
			<img id="tea" src="images/tea.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
">
			<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</h1>
			<div class="text-border">
				<p><?php echo $_smarty_tpl->tpl_vars['item']->value['Summary'];?>
</p> <!--list item details-->
				<div id="bidbox">
					<p><b>Current Bid:</b> $<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
</p>
					<form name="bidform" action="bid.php" method="post" onsubmit="return validateBid()">
						<input type="hidden" name="item_id" id="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"/>
						<input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
"/>
						<input type="text" name="bid" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['Price'];?>
"/>
						<?php if ($_smarty_tpl->tpl_vars['login']->value=='1'){?>
							<input type="submit" id="bidButton" value="bid"/><span id="bidError"></span>
						<?php }?>
					</form>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['finish'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="-1"){?>
						<p><b>Time Left:</b> ended</p>
					<?php }else{ ?>
						<p><b>Time Left:</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['finish'];?>
 days remaining</p>
					<?php }?>

					<p><b>Category:</b> <?php echo $_smarty_tpl->tpl_vars['catName']->value;?>
 </p>
					<p><b>Vendor:</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['Vendor'];?>
 </p>
					<?php if ($_smarty_tpl->tpl_vars['login']->value=='1'){?>
						<a href="bidhistory.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><b>View Bid History</b>
					<?php }?>
				</div>
			</div>

			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['finish'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!="-1"){?>
				<a class="deleteupdate" href="update_item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">Update this item</a> <!--update link-->
				<a class="deleteupdate" href="delete_item_action.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">Delete this item</a> <!--delete link-->
			<?php }?>
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