<html lang="en">
<head>
    <meta name="viewport" content"width=device-width, initial-scale=1.0,user-scalable=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./src/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="src/css/style.css" rel="stylesheet" type="text/css">
    <link href="src/css/base.css" rel="stylesheet" type="text/css">

    <title></title>
</head>
<body>
<div class="loader"></div>
<?php
include('./src/inc/header.inc.php');
?>
<main>
<div> <!---Presentation--->
    <div> <img src="./src/media/img/devider.png" draggable="false" class="devider"></div>
    <div class="block"> <p class="titre">Wedevus - Services de développement sur commande.</p>
        <div> <p class="point-fort">Nos points forts :</p> <div class=" d-flex flex-row">
            <div class="p-2 points-fort"> <div><i class="material-icons picon">timer</i><p>Rapidité</p> </div> <p class="pdesc"> Commande prise en charge sous un délais de 48h.</p> </div>
            <div class="p-2 points-fort small"> <div><i class="material-icons picon">check_circle</i><p>Efficacité</p> </div> <p class="pdesc"> Nous nous engageons à développer des produits performants qu'elle que soit la demande. </p> </div>

            <div class="p-2 points-fort small mobile-main"> <div><i class="material-icons picon">polymer</i><p>Diversité</p> </div> <p class="pdesc"> Nous disposons d'un large panel de services a votre entière disposition. </p> </div>
            <div class="p-2 points-fort mobile-main"> <div><i class="material-icons picon">contact_support</i><p>Suivi</p> </div> <p class="pdesc"> Un support à votre écoute en cas de problème, ainsi qu'un SAV en cas de disfonctionnement. </p> </div>
        </div>
            <div class="mobile-main-visible d-flex flex-row">
                <div class="p-2 points-fort small"><div><i class="material-icons picon">contact_support</i><p>Suivi</p> </div> <p class="pdesc"> Un support à votre écoute en cas de problème, ainsi qu'un SAV en cas de disfonctionnement. </p> </div>
                <div class="p-2 points-fort"> <div><i class="material-icons picon">polymer</i><p>Diversité</p> </div> <p class="pdesc"> Nous disposons d'un large panel de services a votre entière disposition. </p> </div>
            </div>
        </div> </div>
    <div> <img src="./src/media/img/devider.png" draggable="false" class="devider ddown bg-white" > </div>
</div>

<div> <div class="block partenaire">
    <div><p class="pt titre grey">Nos partenaires</p></div>
    <div class="d-flex flex-row profil-box justify-content-center">
        <div class="p-2 profil-box "> <a href="https://discord.gg/Ke6MYdC" draggable="false" style="text-decoration: none" ><img src="./src/media/img/lunazia.png" class="rounded-circle profil-partenaire"> </a>  <p>Lunazia Network</p> </div>
        <div class="p-2 profil-box"> <a href="#"><img src="./src/media/img/bedevus.png" draggable="false" class="rounded-circle profil-partenaire"> </a> <p>Indisponible</p> </div>


    </div>

</div></div>

</main>

<?php include('./src/inc/footer.inc.php'); ?>



<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="src/js/style.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./src/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>