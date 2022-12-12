<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/page_biographie.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include("section/navbar.html"); ?>
    <div class="mots">
        <h3 class="mots"> Le mot du fondateur </h3>
    </div>

    <div class="mot_fondateur">
        <div class="bloc-phrase">
            <p>
                Je suis David Guilavogui jeune guinéen 
                licencié
                de droit activiste et passionné d'entreprenariat, de richesse légale,
                de  santé et de bien-être.
            </p>
            <p>
                j'ai creer le blog <span class="site">Davgui</span> pour partager les insformations qui instruit, coach,
                𝖽é𝗏𝖾𝗅𝗈𝗉𝗉𝖾 𝖾𝗍 𝖺𝗍𝗍𝗂𝗋𝖾 𝗏𝖾𝗋𝗌 𝗅𝖺 𝗋é𝗎𝗌𝗌𝗂𝗍𝖾 𝖾𝗍 𝗅𝖾 𝗌𝗎𝖼𝖼è𝗌
                𝖾𝗇 𝗉𝗈𝗎𝗌𝗌𝖺𝗇𝗍 à 𝖽é𝖼𝗈𝗎𝗏𝗋𝗂𝗋 𝖾𝗇 𝗇𝗈𝗎𝗌 𝗅𝖾𝗌 𝗉𝗈𝗍𝖾𝗇𝗍𝗂𝖺𝗅𝗂𝗍é𝗌
                é𝗇𝗈𝗋𝗆𝖾𝗌 𝗊𝗎𝗂  𝗌𝗈𝗇𝗍 𝗂𝗇𝖼𝗎𝗅𝗊𝗎é𝖾𝗌 𝖾𝗇 𝖼𝗁𝖺𝖼𝗎𝗇 𝗆𝖺𝗂𝗌
                𝗂𝗀𝗇𝗈𝗋é𝖾𝗌
                𝖺𝗎 𝖽é𝖻𝗎𝗍 𝖺𝖿𝗂𝗇 𝖽𝖾 𝗌´𝖾𝗇 𝗌𝖾𝗋𝗏𝗂𝗋 𝗉𝗈𝗎𝗋 𝗋é𝗎𝗌𝗌𝗂𝗋 𝗉𝗅𝗎𝗌.
            </p>
        </div>

        <div class="mot_photo">
              <img src="photo/fondateur.jpg">
              <h3>Fondateur de davgui</h3>
        </div>
    </div>

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