Quintus.ActionEnemy = function(Q) {

	// traits shared by all enemies
	Q.component("commonAttributes", {
		added: function() {
			// check for left, right, bottom collisions
			var entity = this.entity;
			entity.on("bump.left, bump.right, bump.bottom", function(collision) {
				if(collision.obj.isA("Player")) {
					// remove one from total
					Q.state.set("lives", Q.state.get("lives")-1);

					if(Q.state.get("lives") == 0) {
						// reset lives, clovers, checks
                    	Q.state.set({lives:3, clovers:0, toll:0, charlie:0, frank:0});
                    	
                    	// sweet dee style insult
                    	Q.stageScene("endGame",2, { label: "Game over ass dicks!" });

                	} else {
                		// sweet dee style insult
                    	Q.clearStages();
          				Q.stageScene('level');
                    	Q.state.set({clovers:0, toll:0, charlie:0, frank:0});
                	}

                	// destroy object on collision
                	collision.obj.destroy();
				}
			});

			// check for top collisions
			entity.on("bump.top", function(collision) {

				// bounce on sprite death
				collision.obj.p.vy = -100;

				// play audio on collision
				Q.audio.play('wilhelm-scream.mp3');

				// kill sprite
				this.destroy();
			});
		}
	});

	Q.Sprite.extend("Ground", {
		init: function(p) {
			// set default travel direction
			this._super(p, {vx: -50, defaultDirection: "left"});
			this.add("2d, aiBounce, commonAttributes");
		},

		step: function(dt) {
			var directionX = this.p.vx / Math.abs(this.p.vx);
			// locate current position
			var ground = Q.stage().locate(this.p.x, this.p.y + this.p.h/2 + 1, Q.SPRITE_DEFAULT);
			// next element on map
			var nextElement = Q.stage().locate(this.p.x + directionX * this.p.w/2 + directionX, this.p.y + this.p.h/2 + 1, Q.SPRITE_DEFAULT);
			var nextTile;

			if (nextElement instanceof Q.TileLayer) {
				nextTile = true;
			}

			// if no next tile, but ground is present flip directions
			if(!nextTile && ground) {
				if(this.p.vx > 0) {
					// if direction is right, flip left
					if(this.p.defaultDirection == "right") {
						this.p.flip = "x";
					}

					else {
						this.p.flip = false;
					}
				}

				// if direction is left, flip right
				else {
					if(this.p.defaultDirection == "left") {
						this.p.flip = "x";
					}

					else {
						this.p.flip = false;
					}
				}

				// change velocity
				this.p.vx = -this.p.vx;
			}
		}
	});

	
	Q.Sprite.extend("Flying", {
		init: function(p) {
			// add motion range
			this._super(p, {vy: -100, rangeY: 40, gravity: 0});
			this.add("2d, commonAttributes");

      		this.p.initialY = this.p.y;
      		this.p.initialVy = this.p.vy;
      		this.p.vyDirection = this.p.vy/Math.abs(this.p.vy);

      		var that = this;
      		// if collision with top or bottom 
      		this.on("bump.top, bump.bottom",function(collision) {
        		that.p.vy = -Math.abs(that.p.initialVy) * that.p.vyDirection;
        		that.p.vyDirection = that.p.vy/Math.abs(that.p.vy);
			});
		},


		step: function(dt) {
			if(this.p.y - this.p.initialY >= this.p.rangeY && this.p.y > 0) {
				this.p.vy = -this.p.vy;
				this.p.vyDirection *= -1;
			}

			else if(-this.p.y + this.p.initialY >= this.p.rangeY && this.p.vy < 0) {
				this.p.vy = -this.p.vy;
				this.p.vyDirection *= -1;
			}
		}

	});

};
