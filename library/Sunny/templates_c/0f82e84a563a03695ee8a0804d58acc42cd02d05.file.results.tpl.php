<?php /* Smarty version Smarty-3.1.13, created on 2013-04-11 07:28:11
         compiled from ".\templates\results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27452516649ebbe08e4-64139204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f82e84a563a03695ee8a0804d58acc42cd02d05' => 
    array (
      0 => '.\\templates\\results.tpl',
      1 => 1365649045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27452516649ebbe08e4-64139204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'query' => 0,
    'a1_categories' => 0,
    'a1_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516649ebc8a655_26624747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516649ebc8a655_26624747')) {function content_516649ebc8a655_26624747($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOLO</title>
	<link rel="stylesheet" type="text/css" href="css/styling.css" />
</head>
<body>
	<div id="navbox">
		  <a class="navtext" href="index.html">Home</a>
		  <a class="navtext" href="about.html">About</a>
		  <a class="navtext" href="contact.html">Contact Us</a>
		  <a class="navtext" href="location.html">Location</a>
		  <form id="search" method="get" action="item_list.php">
		  	Search: <input type="text" name="query"> <input type="submit" value="Search">
		  </form>
	</div>
	<div id="box">
		<h1 id="welcome">Welcome</h1>
	</div>
	<h1>Results for '<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
'</h1>

	<?php if ((count($_smarty_tpl->tpl_vars['a1_categories']->value)==0)){?> 
    <p>Sorry, no results found.</p>
  <?php }else{ ?>
    <table>
    <thead>
    <tr><th>Name</th><th>Summary</th></tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['a1_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a1_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a1_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a1_category']->key => $_smarty_tpl->tpl_vars['a1_category']->value){
$_smarty_tpl->tpl_vars['a1_category']->_loop = true;
?>
      <tr><td><?php echo $_smarty_tpl->tpl_vars['a1_category']->value['Name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['a1_category']->value['Summary'];?>
</td></tr>
    <?php } ?>
    </tbody>
    </table>
  <?php }?>

	<div id="footer">
		<a class="footertext" href="faq.html">FAQ</a>
		<a class="footertext" href="index.html">Home</a>
	</div>
</body>
</html><?php }} ?>