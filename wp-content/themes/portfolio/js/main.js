// Boutons
// Menu burger



    (function() {
        // Affichage du menu responsive \\
        document.getElementById("burger-button").addEventListener("click", function() {
            document.getElementById("menu-burger").className = "menu-burger show";
        });
        // Fermeture du menu responsive \\
        document.getElementById("close-button").addEventListener("click", function() {
            document.getElementById("menu-burger").className = "menu-burger hide";
        });
    })();








// Animations
// Accueil

TweenMax.from(".accueil-illustration",3,{
    opacity: 0,
    x:50,
    ease:Power3.easeOut,})

TweenMax.from(".accueil-gauche",3,{
    opacity: 0,
    x:-50,
    ease:Power3.easeOut,})

// Réalisation navigation secondaire \\
var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 1000}});

	// build scenes
	new ScrollMagic.Scene({triggerElement: "#sec1"})
        .setClassToggle("#high1", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
	new ScrollMagic.Scene({triggerElement: "#sec2"})
        .setClassToggle("#high2", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
	new ScrollMagic.Scene({triggerElement: "#sec3"})
        .setClassToggle("#high3", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
	new ScrollMagic.Scene({triggerElement: "#sec4"})
        .setClassToggle("#high4", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#sec5"})
        .setClassToggle("#high5", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#sec6"})
        .setClassToggle("#high6", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#sec7"})
        .setClassToggle("#high7", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#sec8"})
        .setClassToggle("#high8", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    /*new ScrollMagic.Scene({triggerElement: "#sec9"})
        .setClassToggle("#high9", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#sec10"})
        .setClassToggle("#high10", "active") // add class toggle
        //.addIndicators() // add indicators (requires plugin)
        .addTo(controller);*/



// Réalisations PIN
function myFunction(x) {
    if (x.matches) { // If media query matches
        // Pas d'anim ou de pin
        TweenMax.from(".realisation-droit",2,{
            delay: 0.2,
            opacity: 0,
            ease:Power3.easeOut,})
        
        TweenMax.staggerFrom(".stagger2",2,{
            delay: 0.2,
            opacity: 0,
            ease:Power3.easeOut,},0.2)
    } else {
        TweenMax.from(".realisation-droit",5,{
            delay: 0.3,
            opacity: 0,
            ease:Power3.easeOut,})
        
        TweenMax.staggerFrom(".stagger2",3,{
            delay: 0.3,
            opacity: 0,
            ease:Power3.easeOut,},0.3)
        
        var controller = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onLeave',
                duration: "100%",
            }
        });
        
        var slides = document.getElementsByClassName("realisations");
        
        
        for (var i=0; i<slides.length; i++) {
            new ScrollMagic.Scene({
                    triggerElement: slides[i]
                })
                .setPin(slides[i], {pushFollowers: false})
                //.addIndicators() // add indicators (requires plugin)
                .addTo(controller);
        }
    }
  }
  
  var x = window.matchMedia("(max-width: 600px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes




// CONTACT


TweenMax.from(".contact-gauche",2,{
    opacity: 0,
    y:50,
    ease:Power3.easeOut,})

TweenMax.from(".contact-droit",2,{
    opacity: 0,
    y:50,
    ease:Power3.easeOut,})


// Projet individuel
TweenMax.from(".image-projet",3,{
    opacity: 0,
    ease:Power3.easeOut,})

TweenMax.from(".description-projet p",2,{
    opacity: 0,
    delay: 0.3,
    ease:Power3.easeOut,})
    

TweenMax.staggerFrom(".image-additionnelle",1,{
    opacity: 0,
    x:50,
    delay: 0.6,
    ease:Power3.easeOut},0.2);

// CV
TweenMax.staggerFrom(".stagger",1,{
    opacity: 0,
    y:50,
    ease:Power3.easeOut},0.3);

TweenMax.from(".cv-droit",2,{
    opacity: 0,
    delay: 0.3,
    ease:Power3.easeOut,})