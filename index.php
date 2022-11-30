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
   
    <?php include("section/navbar.html"); ?>
   <?php include("section/banniere.html"); ?>
    
    <section class="actuality">
     <?php include("section/atualite.html");?>
            <div class="about">
                 <?php include("section/biographie.html");?>
                 <?php include("section/contact.html");?>
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