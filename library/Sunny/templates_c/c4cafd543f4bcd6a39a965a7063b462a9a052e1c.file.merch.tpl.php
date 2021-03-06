<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 01:29:43
         compiled from "./templates/merch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92751822054c07b6ee49d03-66687958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4cafd543f4bcd6a39a965a7063b462a9a052e1c' => 
    array (
      0 => './templates/merch.tpl',
      1 => 1421923421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92751822054c07b6ee49d03-66687958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c07b6ee95f36_47153816',
  'variables' => 
  array (
    'login' => 0,
    'capsFName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c07b6ee95f36_47153816')) {function content_54c07b6ee95f36_47153816($_smarty_tpl) {?><!doctype html>
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
    <div class="row" id="secondNav">
        <div class="contain-to-grid sticky">
            <nav class="top-bar">
                <section class="top-bar-section">
                    <ul class="">
                        <li><a href="index.php" class="font">HOME</a></li>
                        <li><a href="episodes.php" class="font">EPISODES</a></li>
                        <li><a href="#" class="font">CAST/CREW</a></li>
                        <li><a href="game.php" class="font">GAME</a></li>
                        <li><a href="merch.php" class="font">MERCH</a></li>
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
      <form id="login" method="POST" action="login_action.php">
        <legend class="font">LOGIN</legend>
        <br>
        <span id="username"><input type="text" name="username" value="" placeholder="username"/></span>
        <span id="password"><input type="password" name="password" placeholder="password" /></span>
        <button id="login_btn" type="submit" value="Submit" class="font" >SUBMIT</button>
      </form>
    </div>

    <!-- OVERLAY REGISTER -->
    <div id="register" class="reveal-modal" data-reveal>
          <form method="post" id="register" name="register" action="register_action.php" onsubmit="return validateRegister()"> <!--Form-->
            <legend class="font">REGISTRATION</legend>
            <br>
            <label> 
              <span class="font">First Name:</span>
              <input type="text" name="regfname" placeholder="Streetlamp" /><span id="regfnameError"></span>
            </label>
            <label> 
              <span class="font">Last Name:</span>
              <input type="text" name="reglname" id="lname" placeholder="Le Moose" /><span id="reglnameError"></span>
            </label>
            <label> 
              <span class="font">Email:</span>     
              <input type="email" name="regemail" id="reg_email" placeholder="S.LeMoose@example.com" /><span id="regemailError"></span>
            </label>
            <label> 
              <span class="font">Username:</span>
              <input type="text" name="regusername" id="reg_username" placeholder="Streetlamp" /><span id="regusernameError"></span>
            </label>
            <label> 
              <span class="font">Password:</span>
              <input type="password" name="regpassword" id="reg_password" /><span id="regpasswordError"></span>
            </label>
            <button type="submit" value="Register" class="font">
                SUBMIT
            </button>
        </form>
    </div>
    <!-- OVERLAY -->

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <section class="white">
        <div class="row seasons">
            <ul class="small-block-grid-4 text-center">
                
                <li class="product">
                    <img src="images/merch/book.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/charlie.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/cup.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/dennis.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/dog.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/facesMug.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/frank.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/greenman.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/joke_dee.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/mac.jpg" alt="">
                    <p class="text-center font">Charlie Day's green man suit</p>
                </li>

                <li class="product">
                    <img src="images/merch/lamp.jpg" alt="">
                    <p class="text-center font">ALWAYS SUNNY LAMP SHADE</p>
                </li>

                <li class="product">
                    <img src="images/merch/paddy.jpg" alt="">
                    <p class="text-center font">PADDY'S PUB IRISH PUB SHIRT</p>
                </li>

                <li class="product">
                    <img src="images/merch/raglan.jpg" alt="">
                    <p class="text-center font">ALWAYS SUNNY RAGLAN</p>
                </li>

                <li class="product">
                    <img src="images/merch/reynolds.jpg" alt="">
                    <p class="text-center font">REYNOLD'S SHIRT</p>
                </li>

                <li class="product">
                    <img src="images/merch/riot.jpg" alt="">
                    <p class="text-center font">MAC'S RIOT SHIRT</p>
                </li>

                <li class="product">
                    <img src="images/merch/wolf.jpg" alt="">
                    <p class="text-center font">WOLF SODA SHIRT</p>
                </li>

            </ul>
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
</html><?php }} ?>
