<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 08:40:04
         compiled from "./templates/update_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202368928254be009470c653-67277502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2fdcb482ea436573a2c45c4b644e9b65fa7452d' => 
    array (
      0 => './templates/update_user.tpl',
      1 => 1422510624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202368928254be009470c653-67277502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54be0094770432_52315126',
  'variables' => 
  array (
    'login' => 0,
    'capsFName' => 0,
    'username' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be0094770432_52315126')) {function content_54be0094770432_52315126($_smarty_tpl) {?><!doctype html>
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
        <img id="logSub" onclick="submitLogin()" src="images/submit.png" alt="">
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
            <img id="regSub" onclick="submitRegister()" src="images/submit.png" alt="">
        </form>
    </div>
    <!-- OVERLAY -->

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <section class="white seasons">
        <form method="post" name="update" id="updateForm" action="update_user_action.php" onsubmit="return validateUpdate()">
            <div class="row">
                <div class="large-3 columns">
                    <br>
                </div>
                <div class="large-3 columns">
                    <h3 class="font text-justify">USERNAME:</h3>
                    <h3 class="font text-justify lineHeight">FIRST NAME:</h3>
                    <h3 class="font text-justify lineHeight">LAST NAME:</h3>
                    <h3 class="font text-justify lineHeight">EMAIL:</h3>
                    <h3 class="font text-justify lineHeight">PASSWORD:</h3>
                </div>
                <div class="large-3 columns">
                    <input type="text" name="username" id="up_username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
                    <input type="text" name="updfname" id="up_fname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
" />
                    <input type="text" name="updlname" id="up_lname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lname'];?>
" />
                    <input type="email" name="updemail" id="up_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" />
                    <input type="password" name="updpassword" id="up_password" />
                </div>
                <div class="large-3 columns">
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="large-2 large-centered columns">
                    <img id="upSub" onclick="submitUpdate()" src="images/submit.png" alt="">
                </div>
            </div>
        </form>
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
</html><?php }} ?>
