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


// Réalisations PIN

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