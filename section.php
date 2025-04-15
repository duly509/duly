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
    <title>Section</title>
</head>
<body>
    <div class="menu-bar">
        <img src="image/logoceducc.png" id="logo">
        <ul>
          <li><a href="index.html"> Accueil</a></li>
          <li><a href="apropos.html">A propos <ion-icon name="arrow-down-outline"></ion-icon></a></i>
              <div class="dropdown-menu">
                  <ul>
                    <li><a href="apropos.html">Qui-sommes nous?</a></li>
                    <li><a href="#">Partenaire</a></li>
                    <li>
                      <a href="#"> Equipe<i class="fas fa-caret-right"></i></a>
                      
                    </li>
                    <li><a href="#">Aticles</a></li>
                  </ul>
                </div>
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="benevolat.html">Faire du benevolat</a>
          </li>
          <li> <a href="don.html">Faire un don <ion-icon name="heart-outline"></ion-icon></a></li>
          <li> <a href="section.html">Les sections </a></li>
        </ul>
      </div>


      <!-- menu tel -->
      <div id="entete">
        <img src="image/logoceducc.png" id="logo_tel"/>
        <div onclick="affichermenu();" id="menu_boutton">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div id="menu">
            <div onclick="enlevermenu();" class="cross">
                <div class="x"></div>
            </div>
            <a href="index.html">Accueil</a>
            <a href="apropos.html">A propos</a>
            <a href="contact.html">Contact</a>
            <a href="benevolat.html">Faire du benevolat</a>
            <a href="don.html">Faire un don <ion-icon name="heart-outline"></ion-icon></a>
            <a href="section.html">Les sections</a>
            <a href="apropos.html">Qui-sommes nous?</a>
            <a href="partenaire.html">Partenaire</a>
            <a href="equipe.html">Equipe</a>
            <a href="blog.html">Articles</a>
           
        </div>
    </div>


    <!-- banner -->
    <div id="banner_section">
        <h2>Les sections</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque deserunt perferendis totam et fugiat in amet porro sit aut, reiciendis tempora optio.</p>
    </div>



    <div id="les_sections">
        <h2>Decouvrir les differentes sections de CEDUCC !</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam sapiente odio delectus commodi, deleniti, perferendis natus quae asperiores, quidem sit quo nobis laborum magnam voluptates! Consequuntur quasi eius soluta explicabo! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga molestias nostrum mollitia assumenda perferendis, ad voluptate explicabo neque quas in accusantium quibusdam adipisci nobis voluptatum repellat unde excepturi vero modi Nisi, minus.</p>
    </div>




    <div id="section_sante">
        <div>
            <img src="image/ceducc_photo2.JPG">
        </div>
       <div>
        <h2>Sante</h2>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam, consequatur a inventore ducimus natus praesentium rerum quas expedita eligendi aliquam accusantium non placeat cupiditate, mollitia blanditiis quos maxime reprehenderit. </p>
       </div>
    </div>

    <div id="section_education">
        <div>
         <h2>Education</h2>
         <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam, consequatur a inventore ducimus natus praesentium rerum quas expedita eligendi aliquam accusantium non placeat cupiditate, mollitia blanditiis quos maxime reprehenderit. </p>
        </div>
        <div>
            <img src="image/benevolat_photo.JPG">
        </div>
    </div>


    <div id="section_culture">
        <div>
            <img src="image/bg.JPG">
        </div>
        <div>
         <h2>Culture</h2>
         <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam, consequatur a inventore ducimus natus praesentium rerum quas expedita eligendi aliquam accusantium non placeat cupiditate, mollitia blanditiis quos maxime reprehenderit. </p>
        </div>
    </div>


    <!-- Aticles -->



<div id="h2_blog">
    <h2>A la une</h2>
 </div>

 <div id="blog">
    <div class="blog_contaner">
       <a href="blog.html">
        <img src="image/foto.JPG">
        <span>Le 25/4/2024</span>
        <h2>Nos activites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
       <span>Lire la suite...</span>
       </a>
    </div>

    <div class="blog_contaner">
       <a href="blog.html">
        <img src="image/bg.JPG">
        <span>Le 25/4/2024</span>
        <h2>Nos activites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
        <span>Lire la suite...</span>
       </a>
    </div>

    <div class="blog_contaner">
       <a href="blog.html">
        <img src="image/bg.JPG">
        <span>Le 25/4/2024</span>
        <h2>Nos activites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
        <span>Lire la suite...</span>
       </a>
    </div>

    <div class="blog_contaner">
        <a href="blog.html">
         <img src="image/foto.JPG">
         <span>Le 25/4/2024</span>
         <h2>Nos activites</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
        <span>Lire la suite...</span>
        </a>
     </div>
 
     <div class="blog_contaner">
        <a href="blog.html">
         <img src="image/bg.JPG">
         <span>Le 25/4/2024</span>
         <h2>Nos activites</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
         <span>Lire la suite...</span>
        </a>
     </div>
 
     <div class="blog_contaner">
        <a href="blog.html">
         <img src="image/bg.JPG">
         <span>Le 25/4/2024</span>
         <h2>Nos activites</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis perspiciatis sint. Quisquam labore aspernatur odit velit? Esse corporis quae omnis nihil cupiditate.</p>
         <span>Lire la suite...</span>
        </a>
     </div>
 </div>

















    <!-- pied de la page -->
    <?php include("includ/entete.php");?>