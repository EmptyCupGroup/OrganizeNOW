var addb = document.getElementById("addtb");
var altt = document.getElementById("altt");
var delt = document.getElementById("delt");
var tablet = document.getElementById("onAltt");
var tablem = document.getElementById("onAddt");
var tabled = document.getElementById("onDelt");

addb.onclick = function(){
    tablem.style.display = "block";

}

altt.onclick = function() {
    tablet.style.display = "block";
}

delt.onclick = function() {
    tabled.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == tablem) {
        tablem.style.display = "none";
    } else if (event.target == tablet) {
        tablet.style.display = "none";
    } else if (event.target == tabled) {
        tabled.style.display = "none";
    }
}