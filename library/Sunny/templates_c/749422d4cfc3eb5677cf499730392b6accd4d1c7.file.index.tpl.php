<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 14:21:51
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196665166496f170451-81210567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1368966092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196665166496f170451-81210567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5166496f239fa9_65374820',
  'variables' => 
  array (
    'query' => 0,
    'heading' => 0,
    'cate_name' => 0,
    'items' => 0,
    'item' => 0,
    'total_pages' => 0,
    'page' => 0,
    'cat_id' => 0,
    'num_items' => 0,
    'items_per_page' => 0,
    'pages' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5166496f239fa9_65374820')) {function content_5166496f239fa9_65374820($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
		<div id="pagination">
			<?php if ($_smarty_tpl->tpl_vars['total_pages']->value>2){?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value==1){?>
					First
				<?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['cat_id']->value!=''){?>
						<a href="index.php?page=1&Cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
&heading=no">First</a>
					<?php }else{ ?>
						<a href="index.php?page=1&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">First</a>
					<?php }?>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['pages']->step = 1;$_smarty_tpl->tpl_vars['pages']->total = (int)ceil(($_smarty_tpl->tpl_vars['pages']->step > 0 ? ceil($_smarty_tpl->tpl_vars['num_items']->value/$_smarty_tpl->tpl_vars['items_per_page']->value)+1 - (1) : 1-(ceil($_smarty_tpl->tpl_vars['num_items']->value/$_smarty_tpl->tpl_vars['items_per_page']->value))+1)/abs($_smarty_tpl->tpl_vars['pages']->step));
if ($_smarty_tpl->tpl_vars['pages']->total > 0){
for ($_smarty_tpl->tpl_vars['pages']->value = 1, $_smarty_tpl->tpl_vars['pages']->iteration = 1;$_smarty_tpl->tpl_vars['pages']->iteration <= $_smarty_tpl->tpl_vars['pages']->total;$_smarty_tpl->tpl_vars['pages']->value += $_smarty_tpl->tpl_vars['pages']->step, $_smarty_tpl->tpl_vars['pages']->iteration++){
$_smarty_tpl->tpl_vars['pages']->first = $_smarty_tpl->tpl_vars['pages']->iteration == 1;$_smarty_tpl->tpl_vars['pages']->last = $_smarty_tpl->tpl_vars['pages']->iteration == $_smarty_tpl->tpl_vars['pages']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['cat_id']->value!=''){?>
						<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
&Cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
&heading=no"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a>
					<?php }else{ ?>
						<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a>
					<?php }?>
				<?php }} ?>

				<?php if ($_smarty_tpl->tpl_vars['page']->value=='total_pages'){?>
					Last
				<?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['cat_id']->value!=''){?>
						<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
&Cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
&heading=no">Last</a>
					<?php }else{ ?>
						<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">Last</a>
					<?php }?>
				<?php }?>
			<?php }?>
		</div>
		<div style="clear:both"></div>
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