<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davgui</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   
    include("navbar.html");
    
    <section class="menu-body">
       <div class="search"></div>
       <div><span>Mon blog professionnel</span></pan></div>
    </section>
    
    <section class="actuality">
        <div class="bloc-actu">
            <h2>Actualites</h2>
            <div class="actu">
                <img src="/photo/picture5.jpg">
                <div>
                    <p>Lorem ipsum sa id,kjjhiui ullam aliquid! Exercitationem!</p>
                    <button><a href="#">Decouvrir</a></button>
                </div>
            </div>
            <div class="actu">
                <img src="/photo/pictures3.jpg">
                <div>
                    <p>Lorem ipsumipsa id,laborum fugiat ut recusandae ullam aliquid! Exercitationem!</p>
                    <button><a href="#">Decouvrir</a></button>
                </div>
            </div>
            <div class="actu">
                <img src="/photo/picture4.png">
                <div>
                    <p>Lorem ipsum dolor ut recusandae ullam aliquid! Exercitationem!</p>
                    <button><a href="#">Decouvrir</a></button>
                </div>
            </div>
        </div>

            <div class="about">
                <div class="profile">
                    <div class="first-body">
                        <img src="/photo/picture2.jpg">
                    </div>
                    <div class="info">
                        <span>Nom: Guilavogui David</span>
                        <span> Profession : Entrepreneur</span>
                        <button class="button ">Biographie</button>
                    </div>
                </div>
                
                <div class="contact">
                    <h3>Contacts</h3>
                    <div class="contact-icon">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
    </section>   
    <footer>
        <h2>Site de davgui</h2>
    </footer>
    
</body>



<script>
    var menu= document.querySelector('.menu');
    var trait= document.querySelector('.trait');
    var menu_toggle=document.querySelector('header');


    menu.onclick = function(){
       trait.classList.toggle('active');
       menu_toggle.classList.toggle('responsive');
       
    }
</script>
</html>