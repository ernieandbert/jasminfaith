<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's Always Sunny in Philadelphia</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
    <script src="lib/quintus.js"></script>
    <script src="lib/quintus_sprites.js"></script>
    <script src="lib/quintus_scenes.js"></script>
    <script src="lib/quintus_input.js"></script>
    <script src="lib/quintus_anim.js"></script>
    <script src="lib/quintus_2d.js"></script>
    <script src="lib/quintus_touch.js"></script>
    <script src="lib/quintus_ui.js"></script>
    <script src="lib/quintus_tmx.js"></script>
    <script src="lib/quintus_audio.js"></script>
    <script src="scripts/dennis.js"></script>
    <script src="scripts/player.js"></script>
    <script src="scripts/enemy.js"></script>
    <script src="scripts/game.js"></script>
    <script src="scripts/clovers.js"></script>

   
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
                        {if $login == '1'}
                            <li><a href="user_detail.php" class="font">SUP {$capsFName}</a></li>
                            <li><a href="index.php?logout=true" class="font">LOGOUT</a></li>
                        {else}
                            <li><a href="#" data-reveal-id="login" data-reveal class="font">LOGIN</a></li>
                            <li><a href="#" data-reveal-id="register" data-reveal class="font">REGISTER</a></li>
                        {/if}     
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

    <script type="text/javascript"> 
        $(document).foundation();
    </script>

    <!-- Import Scripts -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

<!-- http://stackoverflow.com/questions/18038502/how-to-code-a-html5-game-with-distinct-game-states -->
<!-- http://codeincomplete.com/posts/2013/5/19/javascript_gauntlet_logic/ -->
<!-- http://www.html5quintus.com/docs/ui.html -->
<!-- http://www.html5quintus.com/docs/platformer.html -->
<!-- http://www.remcodraijer.nl/quintus/tutorial.html -->
