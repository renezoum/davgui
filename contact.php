<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davgui</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
   
    <?php include("section/navbar.html"); ?>

    <div class="formulaire">
        <form>
            <h3>Welcome</h3>
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

    <footer>
        <h2>Site de davgui</h2>
    </footer>
    
</body>
