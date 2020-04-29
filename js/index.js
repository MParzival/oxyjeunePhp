const banniere = document.querySelector('.banniere');
const slider = document.querySelector('.background');
const logo = document.querySelector('#logo');
const hamburger = document.querySelector('.icone');
const titre = document.querySelector('.titre');
const btnClose = document.querySelector('.closebtn');
//nav
const nav = document.getElementById("myNav");

const lettres = document.querySelectorAll('.lettres');

const desc = document.querySelector('.description');

const tl = new TimelineMax();
// de 0 à 80% la banniere, des 80vh de son conteneur
tl
    .fromTo(banniere,1,{height:"0%"},{height:"80%",ease: Power2.easeInOut})
    .fromTo(banniere, 1.2, {width:"0%"}, {width: "80%", ease: Power2.easeInOut})
    .fromTo(slider, 1.2, {x: "-100%"}, {x: '0%', ease: Power2.easeInOut}, "-=1.2")
    .fromTo(hamburger, 2, {rotation:0, opacity:0, x: "-2000%"}, {rotation: 720, opacity:1,x: '0%', ease: Power2.easeInOut}, "-=0.5")
    .from(logo, 1, {x:"-200%", ease: Back.easeOut.config(1.7)}, "-=2")
    .staggerFrom(lettres, 1, {opacity:0, ease: Back.easeOut.config(1.7)}, 0.2, "-=0.5")
    .fromTo(desc, 1, {opacity:0}, {opacity:1 , ease: Back.easeOut.config(1.7)}, "-=0.5");

hamburger.addEventListener('click', function(){
    TweenMax.to(nav, 0.1,{right:0});
});

btnClose.addEventListener('click', function(){
    TweenMax.to(nav, 0.1,{right:-300});
});

$('.carousel').carousel({
    interval: 7000
});


