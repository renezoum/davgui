<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davgui</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="icon" type="image/png" href="photo/icon.jpg" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
        <body>
             <?php include("section/navbar.html"); ?>
            
             <form class="form_connexion">
                <h3 class="connecter">connetez-vous</h3>
                <input type="username" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button>connexion</button>
                <p>vous n'avez pas de compte<span><a href="inscrire.php">s'incrire</a></span></p>
            </form>

            <?php include("section/footer.html");?>
        </body>
    </html>

   
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
 

