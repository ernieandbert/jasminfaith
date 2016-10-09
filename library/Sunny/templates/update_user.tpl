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
                    <input type="text" name="username" id="up_username" value="{$username}" />
                    <input type="text" name="updfname" id="up_fname" value="{$user.fname}" />
                    <input type="text" name="updlname" id="up_lname" value="{$user.lname}" />
                    <input type="email" name="updemail" id="up_email" value="{$user.email}" />
                    <input type="password" name="updpassword" id="up_password" />
                </div>
                <div class="large-3 columns">
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="large-2 large-centered columns">
                    <span class="pointer"><img id="upSub" onclick="submitUpdate()" src="images/submit.png" alt=""></span>
                </div>
            </div>
        </form>
    </section>

    <script type="text/javascript"> 
        $(document).foundation();
    </script>

    <!-- Import Scripts -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>