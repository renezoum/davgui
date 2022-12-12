<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image/png" href="photo/icon.jpg" >
    <link rel="stylesheet" href="css/page_actualite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<?php include("section/navbar.html"); ?>
    <div class="page_actu">
        <h3 class="mots">Actualité </h3>
    </div>

    <section class="les_pub">
        <div class="publication">
             <div class="les_actu">
                <img src="photo/environnement.jpg">
                <div class="article">
                    <p>Lorem ipsum dolor 
                        sit amet consectetur adipisicing elit.
                        Corporis veritatis eligendi atque iure
                        eius harum ipsa odio quidem perferendis
                        dolor illo provident consectetur fuga nisi 
                        exercitationem 
                        impedit ullam, similique assumenda.
                    </p>
                    <button><a href="#">Lire l'article</a></button>
                </div>
             </div>
             <div class="les_actu">
                <img src="photo/actu1.jpg">
                <div class="article">
                    <p>Lorem ipsum dolor 
                        sit amet consectetur adipisicing elit.
                        Corporis veritatis eligendi atque iure
                        eius harum ipsa odio quidem perferendis
                        dolor illo provident consectetur fuga nisi 
                        exercitationem 
                        impedit ullam, similique assumenda.
                    </p>
                    <button><a href="#">Lire l'article</a></button>
                </div>
             </div>
             <div class="les_actu">
                <img src="photo/pictures3.jpg">
                <div class="article">
                    <p>Lorem ipsum dolor 
                        sit amet consectetur adipisicing elit.
                        Corporis veritatis eligendi atque iure
                        eius harum ipsa odio quidem perferendis
                        dolor illo provident consectetur fuga nisi 
                        exercitationem 
                        impedit ullam, similique assumenda.
                    </p>
                    <button><a href="#">Lire l'article</a></button>
                </div>
             </div>
        </div>
    </section>

<?php include("section/footer.html");?>
</body>


<script>
        var menu= document.querySelector('.trait');
            var trait= document.querySelector('.trait');
            var menu_toggle=document.querySelector('header');


            menu.onclick = function(){
            trait.classList.toggle('active');
            menu_toggle.classList.toggle('responsive');
            
            }
    </script>
</html>