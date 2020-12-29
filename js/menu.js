var container = document.getElementById('hamburger');
var one = document.getElementById('openOne');
var two = document.getElementById('openTwo');
var close = document.getElementById('closer');
var menu = document.getElementById('menu');
var three = document.getElementById('openThree');
    close.onclick = function close(){
        menu.style.display = "none";
        one.style.transform = "rotate(0deg)";
        two.style.transform = "rotate(0deg)";
        three.style.display = "flex";
    }
     container.onclick =  function open(){
        menu.style.display = "block";
        three.style.display = "none";

    }
    