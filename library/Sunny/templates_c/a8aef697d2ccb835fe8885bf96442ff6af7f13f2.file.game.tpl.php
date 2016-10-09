<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 12:34:22
         compiled from "./templates/game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186210116854ca28ce2fd650-74879918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8aef697d2ccb835fe8885bf96442ff6af7f13f2' => 
    array (
      0 => './templates/game.tpl',
      1 => 1422521106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186210116854ca28ce2fd650-74879918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'capsFName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ca28ce38f309_13009378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca28ce38f309_13009378')) {function content_54ca28ce38f309_13009378($_smarty_tpl) {?><!doctype html>
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
    <?php echo '<script'; ?>
 src="lib/quintus.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_sprites.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_scenes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_input.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_anim.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_2d.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_touch.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_tmx.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="lib/quintus_audio.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/dennis.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/player.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/enemy.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/game.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/clovers.js"><?php echo '</script'; ?>
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

    <div class="row">
        <div class="large-12 columns">
            <h1 class="font float text-center" style="padding-top:110px">THE NIGHTMAN COMETHS II</h1>
        </div>
    </div>

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <section class="white" style="height:50%">
        <div class="row">
            <div class="large-12 columns">
                <div class="large-6 columns">
                    <h2 class="font text-center">BACK STORY</h2>
                    <p>A Coffee Shop Princess is in love with a small man who has the characteristics of a little boy. One night, The Nightman comes, with permission from a Troll, and takes away his innocence. The little boy transforms into The Dayman and fights The Nightman. Dayman and the Princess can then be together in their love. Finally coming down from the heavens Charlie proposes to the waitress in which she replies with "I will never marry you."</p>
                </div>
                <div class="large-6 columns">
                    <h2 class="font text-center">INSTRUCTIONS</h2>
                    <p>You play as the nightman, a kung-fu master who needs to reach the top of the castle in order to fight the Little Boy and let him become Day Man. On your journey towards the top of the tower you will encounter many enemies, Charlie Kelly who has proposed to the waitress (see "Marry Me" at the bottom of the screen) and Frank, the feared troll. In order to combat these monsters and foes the arrow keys on the keyboard can be utilised to become the ultimate KARATE MASTER. </p>
                </div>
            </div>
        </div>
    </section>

    <div class="row" style="height:10%">
        <div class="large-12 columns">
            <div class="large-6 columns">
                <h2 class="font text-center whiteFont"><span id="UiClovers"></span></h2>
            </div>
            <div class="large-6 columns">
                <h2 class="font text-center whiteFont"><span id="UiLives"></span></h2>
            </div>
        </div>
    </div>

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

<!-- http://stackoverflow.com/questions/18038502/how-to-code-a-html5-game-with-distinct-game-states -->
<!-- http://codeincomplete.com/posts/2013/5/19/javascript_gauntlet_logic/ -->
<!-- http://www.html5quintus.com/docs/ui.html -->
<!-- http://www.html5quintus.com/docs/platformer.html -->
<!-- http://www.remcodraijer.nl/quintus/tutorial.html -->
<?php }} ?>
