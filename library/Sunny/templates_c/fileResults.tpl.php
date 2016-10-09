<?php /* Smarty version Smarty-3.1.12, created on 2013-04-06 20:33:16
compiled from "./templates/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2106544515fe310075e59-49787292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8a6209a0e8563c0a055e398e0bc7b378fc0d87' => 
    array (
      0 => './templates/results.tpl',
      1 => 1365244391,
      2 => 'file',
      ),
    ),
  'nocache_hash' => '2106544515fe310075e59-49787292',
  'function' => 
  array (
    ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515fe310107b71_87492610',
  'variables' => 
  array (
    'query' => 0,
    'a1_categories' => 0,
    'a1_category' => 0,
    ),
  'has_nocache_code' => false,
  ),false); /*/%%SmartyHeaderCode%%*/?>
  <?php if ($_valid && !is_callable('content_515fe310107b71_87492610')) {function content_515fe310107b71_87492610($_smarty_tpl) {?><!DOCTYPE html>
  <!-- Results page of associativprime minister search example. -->

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
      <h1>Results for '<?php echo $_smarty_tpl->tpl_vars['query']->value;?></h1>

      <?php if ((count($_smarty_tpl->tpl_vars['a1_categories']->value)==0)){?> 
      <p>No results found.</p>
      <?php }else{ ?>
      <table class="bordered">
        <thead>
          <tr><th>No.</th><th>Name</th><th>Summary</th></tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['a1_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a1_category']->_loop = false;
          $_from = $_smarty_tpl->tpl_vars['a1_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
          foreach ($_from as $_smarty_tpl->tpl_vars['a1_category']->key => $_smarty_tpl->tpl_vars['a1_category']->value){
            $_smarty_tpl->tpl_vars['a1_category']->_loop = true;
            ?>
          </td><td><?php echo $_smarty_tpl->tpl_vars['a1_category']->value['Name'];?>
        </td><td><?php echo $_smarty_tpl->tpl_vars['a1_category']->value['Summary'];?>
      </td>
      ></tr>
      <?php } ?>
    </tbody>
  </table>
  <?php }?>
</div>
<div id="footer">
  <a class="footertext" href="faq.html">FAQ</a>
  <a class="footertext" href="index.html">Home</a>
</div>
</body>
</html>