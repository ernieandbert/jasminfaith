Quintus.Clovers = function(Q) {


    // declare sprite
    Q.Sprite.extend("Clovers", {
        init: function(p) {
            this._super(p, {
                sheet: "clover.png",
                sprite: "clover",
                clovers: 1,
            });
         
        this.on("hit");
    },
     
    // if player collides with clover destroy
    hit: function(col){
        if(col.obj.isA("Player")) {
            this.destroy();
            Q.audio.play('coin.mp3');
            Q.state.inc("clovers",this.p.clovers);
         }
    },
     
    step: function(dt){
        this.stage.collide(this);
    },
});

};