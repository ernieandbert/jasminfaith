<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 10:24:05
         compiled from "./templates/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144434284054bcf0ae727fa2-60631121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593c5a0b188cc0007843af62590c230de2b2222d' => 
    array (
      0 => './templates/user.tpl',
      1 => 1422526986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144434284054bcf0ae727fa2-60631121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bcf0ae768736_57094848',
  'variables' => 
  array (
    'login' => 0,
    'capsFName' => 0,
    'capsUser' => 0,
    'capsLName' => 0,
    'capsEmail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bcf0ae768736_57094848')) {function content_54bcf0ae768736_57094848($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's Always Sunny in Philadelphia</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bower_components/modernizr/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/navigation.js"><?php echo '</script'; ?>
>
  </head>
  <body>

    <section>
        <!-- Navigation -->
        <div class="row head">
            <div class="large-12 columns">
                <a href="#" onclick="toggle_visibility(secondNav)">
                    <img class="left menu" src="images/menu.png" alt="">
                </a>
                <a href="index.php">
                    <img id="logo" src="images/logoWhite.png" alt="">
                </a>
            </div>
        </div>
    </section>


    <div class="row" id="secondNav">
        <div class="contain-to-grid">
            <nav class="top-bar">
                <section class="top-bar-section">
                    <ul class="">
                        <li><a href="index.php" class="font">HOME</a></li>
                        <li><a href="game.php" class="font">GAME</a></li>
                        <li><a href="#" class="font">SOCIAL</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['login']->value=='1') {?>
                            <li><a href="user_detail.php" class="font">SUP <?php echo $_smarty_tpl->tpl_vars['capsFName']->value;?>
</a></li>
                            <li><a href="index.php?logout=true" class="font">LOGOUT</a></li>
                        <?php } else { ?>
                            <li><a href="#" data-reveal-id="login" data-reveal class="font">LOGIN</a></li>
                            <li><a href="#" data-reveal-id="register" data-reveal class="font">REGISTER</a></li>
                        <?php }?>     
                    </ul>
                </section>
            </nav>
        </div>
    </div>

    <!-- OVERLAY LOGIN -->

    <div id="login" class="reveal-modal" data-reveal>
      <form id="loginForm" method="POST" action="login_action.php">
        <legend class="font">LOGIN</legend>
        <br>
        <span id="username" class="input">
            <input type="text" id="login_user" name="username" value="" placeholder="username"/>
        </span>
        <span id="password"><input id="login_pass" type="password" name="password" placeholder="password" /></span>
        <span class="pointer"><img id="logSub" onclick="submitLogin()" src="images/submit.png" alt=""></span>
      </form>
    </div>

    <!-- OVERLAY REGISTER -->
    <div id="register" class="reveal-modal" data-reveal>
          <form method="post" id="registerForm" name="register" action="register_action.php" onsubmit="return validateRegister()"> 
          <!--action="register_action.php" -->
            <legend class="font">REGISTRATION</legend>
            <br>
            <label> 
              <span class="font">First Name:</span>
              <input type="text" name="regfname" id="fname" placeholder="Streetlamp" id="fname" />
            </label>
            <label> 
              <span class="font">Last Name:</span>
              <input type="text" name="reglname" id="lname" placeholder="Le Moose" />
            </label>
            <label> 
              <span class="font">Email:</span>     
              <input type="email" name="regemail" id="reg_email" placeholder="S.LeMoose@example.com" />
            </label>
            <label> 
              <span class="font">Username:</span>
              <input type="text" name="regusername" id="reg_username" placeholder="Streetlamp" />
            </label>
            <label> 
              <span class="font">Password:</span>
              <input type="password" name="regpassword" id="reg_password" />
            </label>
            <span class="pointer"><img id="regSub" onclick="submitRegister()" src="images/submit.png" alt=""></span>
        </form>
    </div>
    <!-- OVERLAY -->

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <section class="white seasons">
        <div class="row">
            <div class="large-12 columns">
                <div class="large-4 columns">
                    <br>
                </div>
                <div class="large-6 columns">
                    <h3 class="font text-justify">USERNAME: <?php echo $_smarty_tpl->tpl_vars['capsUser']->value;?>
</h3>
                    <h3 class="font text-justify">FIRST NAME: <?php echo $_smarty_tpl->tpl_vars['capsFName']->value;?>
</h3>
                    <h3 class="font text-justify">LAST NAME: <?php echo $_smarty_tpl->tpl_vars['capsLName']->value;?>
</h3>
                    <h3 class="font text-justify">EMAIL: <?php echo $_smarty_tpl->tpl_vars['capsEmail']->value;?>
</h3>
                </div>
                <div class="large-2 columns">
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="large-12 columns">
            <form action="update_user.php">
                <button class="font left" id="update_info" type="submit">UPDATE</button>
            </form>
                <form action="delete_user_action.php" method="POST">
                    <button class="font right" id="delete_user_btn" type="submit">DELETE</button>
                </form>
            </div>
        </div>
    </section>

    <?php echo '<script'; ?>
 type="text/javascript"> 
        $(document).foundation();
    <?php echo '</script'; ?>
>

    <!-- Import Scripts -->
    <?php echo '<script'; ?>
 src="bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bower_components/foundation/js/foundation.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
