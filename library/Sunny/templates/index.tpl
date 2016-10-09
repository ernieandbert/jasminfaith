<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's Always Sunny in Philadelphia</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300|Sancreek|Raleway:100' rel='stylesheet' type='text/css' />
    <script src="js/validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
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

    <section class="white" style="height:80%">
        <div class="row">
            <div class="large-12 columns">
                <h1 class="font text-center desc">THE NIGHTMAN COMETH II</h1>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">
                <h3 class="font text-center yellow">CONCEPT</h3>
                <p class="">Following a failed attempt by a friend to make a game called the Nightman Cometh during this class last year, I have decided to create a remake: The Nightman Cometh II. The game will be a take on Always Sunny in Philadelphia’s The Nightman Cometh play written by Charlie Kelly in order to impress The Waitress.</p>
            </div>
            <div class="large-4 columns">
                <h3 class="font text-center yellow">ISSUES</h3>
                <p class="">With regards to the game, having never created one before, issues may arise with the lives system (I would like to make it so that after 3 deaths the game is over) and the collectibles. Apart from this, everything else seems doable (login, update, delete) having taken previous courses including Web Programming and Database Design.</p>
            </div>
            <div class="large-4 columns">
                <h3 class="font text-center yellow">FINAL</h3>
                <p class="">Success. Not only did I mange to implement a system where the players lives were counted and displayed, but I was also able to implement collectibles and a feature where the player is unable to finish the game without interacting with the Troll. This allows the game (within the boundaries of a simple game) to follow the storyline of the play more closely.</p>
            </div>
        </div>
    </section>

    <section class="bananas">
        <div class="row">
            <div class="large-12 columns">
                <h1 class="font text-center">BY JAZZ ERNEST S2836388</h1>
            </div>
        </div>
    </section>

    <section class="white" style="height:100%">
        <div class="row">
            <div class="large-12 columns">
                <p class="font desc text-center">A BRIEF HISTORY</p>
                <p class="text-center">The following video is a copy of The Nightman Cometh acted out by The Gang with special features including Charlie Kelly's Dayman and Nightman songs.</p>
            </div>
        </div>
        <div class="row">
            <div class="small-2 large-2 columns" style="color:white">.</div>
            <div class="small-4 large-9 columns">
                <iframe class="float" width="640" height="390" src="http://www.youtube.com/embed/OR4zefzP7d0" frameBorder="0"> </iframe>
            </div>
            <div class="small-6 large-1 columns" style="color:white">.</div>
        </div>
    </section>

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
    <script type="text/javascript">
        $(document).foundation();
    </script>

    <!-- Import Scripts -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script src="js/app.js"></script>
    <script>
        $(document).ready(function() {
            $(".cs-text-cut").lettering('words');
        });
    </script>
  </body>
</html>

<!-- http://stackoverflow.com/questions/18038502/how-to-code-a-html5-game-with-distinct-game-states -->
<!-- http://codeincomplete.com/posts/2013/5/19/javascript_gauntlet_logic/ -->
<!-- http://www.html5quintus.com/docs/ui.html -->
<!-- http://www.html5quintus.com/docs/platformer.html -->
<!-- http://www.remcodraijer.nl/quintus/tutorial.html -->

<!-- 

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
    <script src="scripts/player.js"></script>
    <script src="scripts/enemy.js"></script>
    <script src="scripts/game.js"></script>

-->
