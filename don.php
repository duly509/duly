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
    <title>Don</title>
</head>
<body>
<?php include("includ/entete.php");?>

    <div id="pourquoi_donner">
        <h2>Pourquoi faire un don a CEDUCC?</h2>
        <div id="pour_culture">
            
            <p> <strong>Culture :</strong> sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur.</p>
         </div>
    
    
         <div id="pour_sante">
            <p> <strong>Sante :</strong> sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur.</p>
         </div>
    
    
    
         <div id="pour_education">
            <p> <strong>Education  :</strong> sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur.</p>

         </div>
    </div>






   <div id="don">
    <div id="infos_perso">
        
            <h2>informations Personel</h2>
            <form action="" method="post">
                <input type="email" name="email" placeholder="Email"  required>
                <input type="text" name="nom" placeholder="Nom et Prenom" required>
                <input list="pays-list" id="pays" name="pays" placeholder="Pays" required>
                    <datalist id="pays-list">
                        <option value="Haiti">
                        <option value="USA">
                        <option value="Chili">
                        <option value="France">
                        <option value="Canada">
                        <option value="Brazil">
                        <option value="Germany">
                        <option value="Japan">
                    </datalist>
                
                <input type="text"  name="ville" placeholder="Ville" required>
                <input type="text"  name="code_postale" placeholder="Code Postale" required>
                <input type="text"  name="adresse" placeholder="Adresse" required>
            </form>
        </div>
        





     <div id="donation_container">
        <h2>Faites un don</h2>
        <p class="label_titre">Votre soutien nous aide à continuer notre mission.</p>

        <form id="donationForm">
            <div class="montant-options">
                <input type="radio" id="montant10" name="montant" value="10" required>
                <label for="montant10">10$</label>

                <input type="radio" id="montant20" name="montant" value="20">
                <label for="montant20">20$</label>

                <input type="radio" id="montant50" name="montant" value="50">
                <label for="montant50">50$</label>

                <input type="radio" id="montant100" name="montant" value="100">
                <label for="montant100">100$</label>

                <input type="radio" id="montantAutre" name="montant" value="autre">
                <label for="montantAutre">Autre</label>
            </div>

            <!-- Champ pour montant personnalisé -->
            <input type="number" id="autreMontant" name="autreMontant" placeholder="Montant personnalisé" min="1" style="display: none;">

            <!-- Choisir le type de don -->
            <div class="frequency-options">
                <input type="radio" id="donUnique" name="frequency" value="unique" required checked>
                <label for="donUnique">Paiement unique</label>

                <input type="radio" id="donMensuel" name="frequency" value="mensuel">
                <label for="donMensuel">Abonnement mensuel</label>
            </div>

            <button type="button" id="stripe-button">Valider le don</button>
        </form>
     </div>
   </div>






   <div id="securite_don">
    <div>
        <h2>Vos informations sont securisees</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum minus dolorum nam! Delectus sunt corrupti rem id ipsam porro laudantium quasi rerum repellat in dolor vitae, modi cupiditate, pariatur nisi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum sed sint necessitatibus alias quo veritatis porro architecto sapiente tempore, consequuntur recusandae, in cumque perspiciatis suscipit sit laborum repellat asperiores similique.</p>

    </div>

    <div>
        <h2>Vos avantages </h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum minus dolorum nam! Delectus sunt corrupti rem id ipsam porro laudantium quasi rerum repellat in dolor vitae, modi cupiditate, pariatur nisi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum sed sint necessitatibus alias quo veritatis porro architecto sapiente tempore, consequuntur recusandae, in cumque perspiciatis suscipit sit laborum repellat asperiores similique.</p>
    </div>

    <div>
        <h2>Que peut faire CEDUCC grace a vos dons?</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor culpa aliquid perferendis consequuntur velit voluptatum placeat dicta quod. Necessitatibus eos corporis deserunt similique? Quo vel doloremque, explicabo magni sapiente laborum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis velit numquam id commodi facere eveniet fuga? Dolorum veritatis adipisci odio id iste numquam, voluptates, iusto, aliquid molestiae error exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ut animi cumque fugit sint atque a quos aliquam asperiores consequatur tempora, ex quas ipsum! Eligendi quod a ut doloremque consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum minus dolorum nam! Delectus sunt corrupti rem id ipsam porro laudantium quasi rerum repellat in dolor vitae, modi cupiditate, pariatur nisi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum sed sint necessitatibus alias quo veritatis porro architecto sapiente tempore, consequuntur recusandae, in cumque perspiciatis suscipit sit laborum repellat asperiores similique.</p>
        
    </div>
   </div>














    <!-- pied de la page -->

    <?php include("includ/entete.php");?>