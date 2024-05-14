// Enable Rellax
var rellax = new Rellax('.rellax');



// Validate form
$("contactform").validate();


// Navigation
var pageheight = $(document).height();
var pagepercent = pageheight;
var bottomvalue = document.body.offsetHeight - 800;

// console.log("window.pageYOffset: " + window.pageYOffset);
// console.log("window.innerHeight: " + window.innerHeight);
// console.log("document.body.offsetHeight: " + document.body.offsetHeight);
// console.log("bottomvalue: " + bottomvalue);


//https://stackoverflow.com/questions/9439725/javascript-how-to-detect-if-browser-window-is-scrolled-to-bottom
window.onscroll = function(ev) {
    if (window.pageYOffset >= 0 && window.pageYOffset <= 550) {
        //top show
        // console.log("TOP TRIGGERED window.pageYOffset: " + window.pageYOffset);
        document.getElementById("nav-top").style.opacity = "1";
        document.getElementById("nav-mid").style.opacity = "0";
        document.getElementById("nav-bottom").style.opacity = "0";
    }

    if(window.pageYOffset >= 551 && window.pageYOffset <= 2899 ) {
        //middle show
        // console.log("Middle TRIGGERED window.pageYOffset");
        document.getElementById("nav-top").style.opacity = "0";
        document.getElementById("nav-mid").style.opacity = "1";
        document.getElementById("nav-bottom").style.opacity = "0";
    }

    if (window.pageYOffset >= 2900) {
        //Bottom show
        // console.log("BOTTOM TRIGGERED window.pageYOffset: " + window.pageYOffset);
        document.getElementById("nav-top").style.opacity = "0";
        document.getElementById("nav-mid").style.opacity = "0";
        document.getElementById("nav-bottom").style.opacity = "1";
    }
 };

var tl = new TimelineMax({repeat:-1});
tl.to("#down_arrow", 0.2, {y:6, ease: Power1.easeOut}, "3")
.to("#down_arrow", 0.2, {y:0, ease: Power1.easeIn}, "3.2");

var tl2 = new TimelineMax({repeat:-1});
tl2.to(".return_arrow", 0.2, {x:6, ease: Power1.easeOut}, "3")
.to(".return_arrow", 0.2, {x:0, ease: Power1.easeIn}, "3.2");


var tl1 = new TimelineMax({repeat:-1});
tl1.to(".click_button", 1, {opacity:0.4, yoyo:true}, "0")
   .to(".click_button", 1, {opacity:0.8, yoyo:true}, "1");


//    var rellax = new Rellax('.rellax', {
//     breakpoints:[480]
//   });

// Remove rellax on mobiel
// var element = document.getElementById("item_1");
// element.classList.remove("rellax");
