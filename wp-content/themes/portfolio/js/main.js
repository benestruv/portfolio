


// Animations
var controller = new ScrollMagic.Controller();

var AnimBanner = new TimelineMax();

var curtains = new TimelineMax();

var gauche = TweenMax.from(".realisation-gauche",1,{y: -800,})
var droit = TweenMax.from(".realisation-droit",1,{x: 900,})


curtains
    .add(gauche)
    .add(droit)

new ScrollMagic.Scene({
    triggerElement: ".realisation", 
    triggerHook: "onLeave",
})
    .addTo(controller)
    .setTween(curtains)
    .addIndicators()
    .setPin(".test");
