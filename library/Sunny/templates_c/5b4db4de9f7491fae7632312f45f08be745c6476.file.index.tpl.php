<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 00:54:59
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46087994554ba2f3e6b2773-26396328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4db4de9f7491fae7632312f45f08be745c6476' => 
    array (
      0 => './templates/index.tpl',
      1 => 1421538834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46087994554ba2f3e6b2773-26396328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ba2f3e761f94_29449232',
  'variables' => 
  array (
    'login' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ba2f3e761f94_29449232')) {function content_54ba2f3e761f94_29449232($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's Always Sunny in Philadelphia</title>
    <link rel="stylesheet" href="css/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
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
  </head>
  <body>

    <!-- Navigation -->
    <div class="row">
        <div class="contain-to-grid">
            <nav class="top-bar">
                <section class="top-bar-section">
                    <ul class="">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="episodes.php">EPISODES</a></li>
                        <li><a href="#">CAST/CREW</a></li>
                        <li><a href="#">GAME</a></li>
                        <li><a href="#">MERCH</a></li>
                        <li><a href="#">SOCIAL</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['login']->value=='1') {?>
                            <li><a href="#">Sup <?php echo $_smarty_tpl->tpl_vars['user']->value['fname'];?>
</a></li>
                        <?php } else { ?>
                            <li><a href="#" data-reveal-id="login" data-reveal>LOGIN</a></li>
                            <li><a href="#" data-reveal-id="register" data-reveal>REGISTER</a></li>
                        <?php }?>     
                    </ul>
                </section>
            </nav>
        </div>
    </div>

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <!-- OVERLAY LOGIN -->
    <div id="login" class="reveal-modal" data-reveal>
      <form id="login" action="login_action.php">
        <span id="username"><input type="text" name="username" value="" placeholder="username"/></span>
        <span id="password"><input type="password" name="password" placeholder="password" /></span>
        <span id="login_btn"><input type="submit" value="Submit" /></span>
      </form>
    </div>

    <!-- OVERLAY REGISTER -->
    <div id="register" class="reveal-modal" data-reveal>
      <form method="post" id="register" name="register" action="register_action.php" onsubmit="return validateRegister()"> <!--Form-->
        <legend>Register</legend>
        <br>
        <label> 
          <span>First Name:</span>
          <input type="text" name="regfname" placeholder="Streetlamp" /><span id="regfnameError"></span>
        </label>
        <label> 
          <span>Last Name:</span>
          <input type="text" name="reglname" id="lname" placeholder="Le Moose" /><span id="reglnameError"></span>
        </label>
        <label> 
          <span>Email:</span>     
          <input type="email" name="regemail" id="reg_email" placeholder="S.LeMoose@example.com" /><span id="regemailError"></span>
        </label>
        <label> 
          <span>Username:</span>
          <input type="text" name="regusername" id="reg_username" placeholder="Streetlamp" /><span id="regusernameError"></span>
        </label>
        <label> 
          <span>Password:</span>
          <input type="password" name="regpassword" id="reg_password" /><span id="regpasswordError"></span>
        </label>
        <input type="submit" value="Register" />
    </form>
    </div>
    <!-- OVERLAY -->

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
 src="scripts/player.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/enemy.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/game.js"><?php echo '</script'; ?>
>
  </body>
</html>

<!-- http://stackoverflow.com/questions/18038502/how-to-code-a-html5-game-with-distinct-game-states -->
<!-- http://codeincomplete.com/posts/2013/5/19/javascript_gauntlet_logic/ -->
<!-- http://www.html5quintus.com/docs/ui.html -->
<!-- http://www.html5quintus.com/docs/platformer.html -->
<!-- http://www.remcodraijer.nl/quintus/tutorial.html -->
<?php }} ?>
