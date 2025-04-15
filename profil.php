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
    <link rel="stylesheet" href="css/mobil.css?v=5" media="screen and (max-width:760px)">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
   
<?php include("includ/entete.php");?>


    <div id="profil"> 

        <?php
           $list_menmbre=array();
           $list_menmbre[]=array('name' => 'DuLy', 'age' => 20, 'tel' => '37144579');
           $list_menmbre[]=array('name' => 'DuLy', 'age' => 20, 'tel' => '37144579');
           $list_menmbre[]=array('name' => 'DuLy', 'age' => 20, 'tel' => '37144579');
           $list_menmbre[]=array('name' => 'DuLy', 'age' => 20, 'tel' => '37144579');
           foreach ($list_menmbre as $list)
           {
            echo $list['tel'].'<br/>';
           }
        ?>
        
    



    </div>














    <!-- pied de la page -->
 <div id="pied">
        <div class="ion-icon">
           <h2>Menu</h2>
            <a href="index.html"><ion-icon name="arrow-forward-outline"></ion-icon> Accueil</a>
            <a href="apropos.html"><ion-icon name="arrow-forward-outline"></ion-icon> A propos</a>
            <a href="apropos.html"><ion-icon name="arrow-forward-outline"></ion-icon> Qui-sommes nous?</a>
            <a href="apropos.html"><ion-icon name="arrow-forward-outline"></ion-icon> Partenaire</a>
            <a href="apropos.html"><ion-icon name="arrow-forward-outline"></ion-icon> Activites</a>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> Les sections</a>
            <a href="contact.html"><ion-icon name="arrow-forward-outline"></ion-icon> Contact</a>
            <a href="benevolat.html"><ion-icon name="arrow-forward-outline"></ion-icon> Faire du benevolat</a>
            <a href="don.html"><ion-icon name="arrow-forward-outline"></ion-icon> faire un don</a>
    
        </div>

        
        <div class="ion-icon">
            <h2>Les sections</h2>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> Les U-reporter</a>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> Education</a>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> PFE</a>
            <a href="don.html"><ion-icon name="arrow-forward-outline"></ion-icon> WASH/C-TED</a>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> Sante</a>
            <a href="section.html"><ion-icon name="arrow-forward-outline"></ion-icon> Culture</a>
        </div>
    
    
        <div class="ion-icon">
            <h2>Les sections</h2>
            <a href="partenaire.html"><ion-icon name="arrow-forward-outline"></ion-icon> Les U-reporter</a>
            <a href="mission.html"><ion-icon name="arrow-forward-outline"></ion-icon> Education</a>
            <a href="benevolat.html"><ion-icon name="arrow-forward-outline"></ion-icon> PFE</a>
            <a href="don.html"><ion-icon name="arrow-forward-outline"></ion-icon> WASH/C-TED</a>
            <a href="compte.html" class="compte"><ion-icon name="arrow-forward-outline"></ion-icon> Sante</a>
            <a href="don.html"><ion-icon name="arrow-forward-outline"></ion-icon> Culture</a>
        </div>
    
    
        <div>
            <h2>Contact</h2>
                <p><ion-icon name="call-outline"></ion-icon> : 37682323</p>
                <p><ion-icon name="mail-outline"></ion-icon> : lyovensdurandisse@gmail.com</p>
                <p><ion-icon name="location-outline"></ion-icon> : Route de Darbonne, Leogane Haiti #20</p>
    
                <ul class="contact">
                    <li><ion-icon name="logo-instagram"></ion-icon></li>
                    <li><ion-icon name="logo-facebook"></ion-icon></li>
                    <li><ion-icon name="logo-twitter"></ion-icon></li>
                </ul>
                
        </div>
    
       </div>
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        autoplay:true,
        nav:true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
       </script>

       <script src="javascript/script.js"></script>


   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

</body>
</html>