<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobil.css" media="screen and (max-width:760px)">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php include("includ/entete.php");?>


    <!-- banner -->

    <div id="banner_contact">
        <h2>Contact</h2>
        <p>Vous avez des questions? Contactez-nous ou rejoignez notre news letter.</p>
    </div>

    

    <div id="design_contact">
        <div id="mobil_contact">

            <div id="contact">
                <h2>Formulaire</h2>
                <form action="" method="post">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button name="envoyermessage" type="submit">Envoyer !</button>
                </form>
             </div>
            <div id="adresse">
            <h2>Infos Suplementaire</h2>
            <a href="tel:+50937682323"><ion-icon name="call-outline"></ion-icon> 37682323</a>
            <a href="mailto:lyovensdurandisse@gmail.com"><ion-icon name="mail-outline"></ion-icon> lyovensdurandisse@gmail.com</a>
            <p><ion-icon name="location-outline"></ion-icon> Route de Darbonne, Leogane Haiti #20</p>
            </div>

        </div>
    </div>

   

  <?php include("includ/pied.php");?>