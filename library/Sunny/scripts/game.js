window.addEventListener("load",function() {

  // get html tags
  var UiClovers = document.getElementById("UiClovers");
  var UiLives = document.getElementById("UiLives");

  var Q = window.Q = Quintus({development: true})
    .include("Scenes, Sprites, 2D, Input, Touch, UI, TMX, Audio, Anim")
    .include("ActionPlayer, ActionEnemy, Clovers, Finish, Dee, Frank, Charlie")
    .setup({
      width: 690,
      height: 380,
      scaleToFit: false
    }).controls().touch();

    // enable sound
    Q.enableSound();
    Q.setImageSmoothing(true);

    // load menu scene
    Q.scene("menu",function(stage) {  

      // call stage level
      Q.stageTMX("menu.tmx",stage);
      Q.audio.play('always-sunny.mp3',{ loop: true });

      // menu button
      stage.insert(new Q.UI.Button({
        label: "Start Game",
        y: 190,
        x: Q.width/2 - 30,
        fill: "#FFDF31",
        border: 5,
      }, function() {
        this.p.label = Q.stageScene("level");
      }));

    });

    // main level
    Q.scene("level",function(stage) { 

      // stop audio on level load and call game level
      Q.audio.stop();   
      Q.stageTMX("small_level.tmx",stage);

      // add viewport to follow the player
      var player = Q("Player").first();
      stage.add("viewport").follow(player, {x: false, y: true});

    });

    // ui to display clovers and lives
    Q.scene('ui', function(stage){
      Q.state.set({ clovers: 0, lives: 3, toll: 0, charlie: 0, frank: 0});
      UiClovers.innerHTML = "Clovers: " + Q.state.get("clovers");
      UiLives.innerHTML = "Lives: " + Q.state.get("lives");
     
      Q.state.on("change.clovers",this, function() {
        UiClovers.innerHTML = "Clovers: " + Q.state.get("clovers");
      });
      
      Q.state.on("change.lives",this, function() {
        UiLives.innerHTML = "Lives: " + Q.state.get("lives");
      });

    });

    // Play again btn
    Q.scene('endGame',function(stage) {
      var container = stage.insert(new Q.UI.Container({x: Q.width/2, y: Q.height/2, fill: "rgba(1,1,1,0.8)"}));
   
      var button = container.insert(new Q.UI.Button({ x: 0, y: 0, fill: "#FFFFFF", label: "Play Again" }));       
      var label = container.insert(new Q.UI.Text({x:0, y: -10 - button.p.h, label: stage.options.label, color: "white" }));
      button.on("click",function() {
          Q.clearStages();
          Q.stageScene('level');
          Q.state.set({lives:3, clovers:0, toll:0, charlie:0, frank:0});
      });
  
      container.fit(20);
    });

    // container for interaction with charlie kelly
    Q.scene('gang',function(stage) {
      var container = stage.insert(new Q.UI.Container({x: Q.width/2, y: Q.height/2, fill: "rgba(1,1,1,0.8)"}));
   
      var button = container.insert(new Q.UI.Button({ x: 0, y: 0, fill: "#FFFFFF", label: "Okay" }));       
      var label = container.insert(new Q.UI.Text({x:0, y: -10 - button.p.h, label: stage.options.label, color: "white" }));
      button.on("click",function() {
        container.destroy();
        Q.state.set({charlie:1});
        Q.state.set("clovers", Q.state.get("clovers")+10);
      });
  
      container.fit(20);
    });

    // Troll Toll
    Q.scene('toll',function(stage) {
      var container = stage.insert(new Q.UI.Container({x: Q.width/2, y: Q.height/2, fill: "rgba(1,1,1,0.8)"}));
   
      var button = container.insert(new Q.UI.Button({ x: 0, y: 0, fill: "#FFFFFF", label: "Yes" }));
      var label = container.insert(new Q.UI.Text({x:0, y: -10 - button.p.h, label: stage.options.label, color: "white" }));     
  
      button.on("click", function() {
        if (Q.state.get("clovers") >= 10) {
          container.destroy();
          Q.state.set({toll:1, frank: 1});
          Q.state.set("clovers", Q.state.get("clovers") -10);
        } else {
          Q.stageScene("noToll",2, { label: "Need more clovers" });
          container.destroy();
        }
      });

      container.fit(20);
    });

    //load assets
    Q.loadTMX("menu.tmx, small_level.tmx, sprites.json, sprites.png, kill-enemy.mp3, wilhelm-scream.mp3, always-sunny.mp3, coin.mp3", function() {       
      Q.compileSheets("sprites.png","sprites.json");     
      Q.stageScene("menu");
      Q.stageScene("ui", 1);
    });
  
});
        
        
        