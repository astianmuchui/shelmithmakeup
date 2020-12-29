var menu = document.getElementById("menu_wrap");
//Dynamic background change for menu

menu.onclick = function(){
    menu.style.background = "white";
}
window.onkeydown = function (){
    menu.style.background = "white";
}
window.onscroll = function(){
    menu.style.background = "white";
}
 
//Mission accomplished
AOS.init();



var container = document.getElementById('hamburger');
var one = document.getElementById('openOne');
var two = document.getElementById('openTwo');
var close = document.getElementById('closer');
var ham = document.getElementById('menu');
var three = document.getElementById('openThree');
    close.onclick = function close(){
        ham.style.display = "none";
        one.style.transform = "rotate(0deg)";
        two.style.transform = "rotate(0deg)";
        three.style.display = "flex";
    }
     container.onclick =  function open(){
        ham.style.display = "block";
        three.style.display = "none";

    }
    
    