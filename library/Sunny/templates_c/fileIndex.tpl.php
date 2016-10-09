<?php /* Smarty version Smarty-3.1.12, created on 2013-04-06 20:33:20
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798643114515fe2f83676a8-79580369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1365244391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798643114515fe2f83676a8-79580369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515fe2f839ff12_15649498',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515fe2f839ff12_15649498')) {function content_515fe2f839ff12_15649498($_smarty_tpl) {?><!DOCTYPE html>
<!-- Home page of prime minister search example. -->
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
    <h1>Results</h1>
  </div>
  <div id="footer">
    <a class="footertext" href="faq.html">FAQ</a>
    <a class="footertext" href="index.html">Home</a>
  </div>
</body>
</html>
<?php }} ?>