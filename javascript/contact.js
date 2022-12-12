
var menu= document.querySelector('.trait');
        var trait= document.querySelector('.trait');
        var menu_toggle=document.querySelector('header');


        menu.onclick = function(){
        trait.classList.toggle('active');
        menu_toggle.classList.toggle('responsive');
        
        }