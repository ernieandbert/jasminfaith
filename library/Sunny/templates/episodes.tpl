<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's Always Sunny in Philadelphia</title>
    <link rel="stylesheet" href="css/app.css" />
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
  </head>
  <body>

    <!-- Navigation -->
    <div class="row">
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="episodes.php">EPISODES</a></li>
                        <li><a href="#">CAST/CREW</a></li>
                        <li><a href="game.php">GAME</a></li>
                        <li><a href="merch.php">MERCH</a></li>
                        <li><a href="#">SOCIAL</a></li>
                        {if $login == '1'}
                            <li><a href="user_detail.php">SUP {$capsFName}</a></li>
                            <li><a href="index.php?logout=true">LOGOUT</a></li>
                        {else}
                            <li><a href="#" data-reveal-id="login" data-reveal>LOGIN</a></li>
                            <li><a href="#" data-reveal-id="register" data-reveal>REGISTER</a></li>
                        {/if}     
                    </ul>
                </section>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">.</div>
        <div class="large-6 columns">
            <h2 class="font float" style="margin-top:90px;">EPISODES</h2>
        </div>
        <div class="large-2 columns">.</div>
    </div>

    <!-- Always Sunny Beautiful Heads Header -->
    <section class="sunnyHeads"></section>

    <section class="white">
      <div class="row seasons">
        <div class="large-4 columns">
          <img src="images/seasonOne/cover.jpg"/>
          <h4 class="font">SEASON ONE</h4>
          <p class="text-justify">This season, the gang inadvertently turns Paddy's Pub into a gay bar after one of Sweet Dee's acting class members invites his gay friends over to drink while Mac and Charlie try to prove to Charlie's crush that they are not prejudiced against African Americans.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonTwo/cover.jpg"/>
          <h4 class="font">SEASON TWO</h4>
          <p class="text-justify">This season introduces Dennis and Dee's father Frank who moves in with a wheelchair-bound Charlie following a car accident and blackmails his way into the group and Dee and Dennis's promiscuous, cold-hearted mother, Barbara. Meanwhile, Mac has sex with Barbara and spins a web of lies and deception in order to throw off his tracks.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonThree/cover.jpg"/>
          <h4 class="font">SEASON THREE</h4>
          <p class=" text-justify">The Gang's narcissism spins out of control, as usual. First they decide to do good: Sweet Dee and Mac adopt a baby that was abandoned in a dumpster, Dennis volunteers with environmental rights activists, and everyone in the gang become vigilantes to solve Philadelphia's homeless problem.</p>
        </div>
      </div>

      <div class="row">
        <div class="large-4 columns">
          <img src="images/seasonFour/cover.jpg"/>
          <h4 class="font">SEASON FOUR</h4>
          <p class=" text-justify">This season, the gang inadvertently turns Paddy's Pub into a gay bar after one of Sweet Dee's acting class members invites his gay friends over to drink while Mac and Charlie try to prove to Charlie's crush that they are not prejudiced against African Americans.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonFive/cover.jpg"/>
          <h4 class="font">SEASON FIVE</h4>
          <p class=" text-justify">This season introduces Dennis and Dee's father Frank who moves in with a wheelchair-bound Charlie following a car accident and blackmails his way into the group and Dee and Dennis's promiscuous, cold-hearted mother, Barbara. Meanwhile, Mac has sex with Barbara and spins a web of lies and deception in order to throw off his tracks.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonSix/cover.jpg"/>
          <h4 class="font">SEASON SIX</h4>
          <p class=" text-justify">The Gang's narcissism spins out of control, as usual. First they decide to do good: Sweet Dee and Mac adopt a baby that was abandoned in a dumpster, Dennis volunteers with environmental rights activists, and everyone in the gang become vigilantes to solve Philadelphia's homeless problem.</p>
        </div>
      </div>

      <div class="row">
        <div class="large-4 columns">
          <img src="images/seasonSeven/cover.jpg"/>
          <h4 class="font">SEASON SEVEN</h4>
          <p class=" text-justify">This season, the gang inadvertently turns Paddy's Pub into a gay bar after one of Sweet Dee's acting class members invites his gay friends over to drink while Mac and Charlie try to prove to Charlie's crush that they are not prejudiced against African Americans.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonEight/cover.jpg"/>
          <h4 class="font">SEASON EIGHT</h4>
          <p class="text-justify">This season introduces Dennis and Dee's father Frank who moves in with a wheelchair-bound Charlie following a car accident and blackmails his way into the group and Dee and Dennis's promiscuous, cold-hearted mother, Barbara. Meanwhile, Mac has sex with Barbara and spins a web of lies and deception in order to throw off his tracks.</p>
        </div>
        
        <div class="large-4 columns">
          <img src="images/seasonNine/cover.jpg"/>
          <h4 class="font">SEASON NINE</h4>
          <p class="text-justify">The Gang's narcissism spins out of control, as usual. First they decide to do good: Sweet Dee and Mac adopt a baby that was abandoned in a dumpster, Dennis volunteers with environmental rights activists, and everyone in the gang become vigilantes to solve Philadelphia's homeless problem.</p>
        </div>
      </div>
    </section>

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
    <!-- Import Scripts -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
