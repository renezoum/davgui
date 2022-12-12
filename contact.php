<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davgui</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
    <?php include("section/navbar.html"); ?>
    <div class="formulaire">
        <form>
            <h3>Envoyer un message</h3>
            <div class="bloc_principale">
                <div class="nom_et_email">
                    <div class="flex name">
                        <input type="text" placeholder="nom"/>
                    </div>
                    <div class="flex">
                        <input type="email" placeholder="email"/>
                    </div>
                  
                </div>
                <div class="flex">
                    <input type="text" placeholder="sujet"/>
                </div>
                <div class="flex textarea">
                    <textarea name="message"></textarea>
                </div>
                <div class="button-area">
                    <button>Envoyer</button>
                </div>
            </div>

       </form>
    </div>

    <?php include("section/footer.html");?>
   <script>
        var menu= document.querySelector('.trait');
                var trait= document.querySelector('.trait');
                var menu_toggle=document.querySelector('header');


                menu.onclick = function(){
                trait.classList.toggle('active');
                menu_toggle.classList.toggle('responsive');
                
                }
    </script>
    
</body>
