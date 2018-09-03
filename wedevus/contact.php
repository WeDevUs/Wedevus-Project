<html lang="fr">
<head>
    <!-- <script type="text/javascript">

        document.oncontextmenu = new Function("return false");

    </script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="src/css/base.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
    <link href="src/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="loader"></div>
<?php
include('./src/inc/header.inc.php');
?>
<main>
    <div><img src="./src/media/img/devider.png" class="devider "></div>
    <div class="block">
        <div class="d-flex flex-row  justify-content-center"> <p class="contact p-2">Contacts</p> </div>
        <div class="d-flex flex-row justify-content-center ">

            <div class="contact-box"> <img src="./src/media/img/reddiscord.png" class="com-logo"><a href="#" style="text-decoration: none;"> <p class="contact-content con-btn">Nous rejoindre sur Discord</p></a> </div>
            <div class="contact-box"> <img src="./src/media/img/twitterlogo.png" class="com-logo" ><a href="#" style="text-decoration: none;"> <p class="contact-content con-btn">Nous rejoindre Twitter</p></a> </div>
            <div class="contact-box"> <img src="./src/media/img/mail.png" class="com-logo" > <a href="#" style="text-decoration: none;"><p class="contact-content con-btn">Contacter nous par mail</p></a> </div>

        </div>

    </div>
    <div><img src="./src/media/img/devider.png" class="devider ddown"> <p id="answer"></p></div>

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