Quintus.ActionPlayer = function(Q) {

  // player sprite frames
  Q.animations('player', {
      run_left: { frames: [0, 1], next: 'stand_left', rate: 1/5},
      run_right: { frames: [0, 1], next: 'stand_right', rate: 1/5},
      stand_left: { frames: [0]},
      stand_right: { frames: [0]},
  });

  // define sprite and speed
  Q.Sprite.extend("Player", {    
    init: function(p) {
      this._super(p, {
        sheet: "player",
        sprite: "player",
        jumpSpeed: -300,
        speed: 100,
      });

      // specify 2d and add controls and animation
      this.add("2d, platformerControls, animation");

      // on hit with dennis trigger end of game
      this.on("hit.sprite",function(collision) {
        if(collision.obj.isA("Dennis") && Q.state.get("toll") == 0) {
          Q.stageScene("gang",2, { label: "Have you paid the Troll Toll?" });
        } else if (collision.obj.isA("Dennis") && Q.state.get("toll") == 1) {
          Q.stageScene("endGame",2, { label: "Yay you won! /s" });
        }
      });

      this.on("hit.sprite",function(collision) {
        // collision with Charlie
        if(collision.obj.isA("Charlie") && Q.state.get("charlie") == 0) {
          Q.stageScene("gang",2, { label: "...Dram Bok..." });
        }

        // collision with Frank
        if(collision.obj.isA("Frank") && Q.state.get("frank") == 0) {
          Q.stageScene("toll",2, { label: "Will you pay the Troll Toll?" });
        }   
      });

    },

    step: function(dt) {
        if(this.p.vx < 0) {
          this.p.flip="x";          // flip when going right
          this.play("run_right");
        } else if(this.p.vx > 0) {
          this.p.flip="";           // no flip when going left
          this.play("run_left");
        } else {
          this.play("stand_" + this.p.direction); // stand_left or stand_right
        }
    },

  });

};
