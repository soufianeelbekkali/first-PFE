<!DOCTYPE html>
<html>
    <head>  
          <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EXPRESS TRAINING </title>
        <!-- bootstrap link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--css link   -->
        <link rel="stylesheet" href="htaa.css">
        <link rel="icon" href="test.png" sizes="15x15">
    </head>

    <?php     
          function aff(){
            $con=new mysqli("localhost","root","","gestionstagaire");
              $reqconn="SELECT * FROM post_stagaiire ";
              $result= $con->query($reqconn);
          while($row=$result->fetch_assoc()){?>

          <div class="box">
              <div class="content">
               <div class="icon">
                   <a href="#"> <?= $row["date"]; ?> </a>
                   <a href="#"> </i><?= $row["specialite"]; ?> </a>
               </div>
               <h3><?= $row["nom"]; ?> </h3>
               <p><?= $row["message"]; ?></p>
               <h2>information :</h2>
               <p>number:<?= $row["number"]; ?></p>
               <p><?= $row["email"]; ?></p>
           </div>
       </div>
          <?php
          }
          }
   ?>

    <body> 
    <section class="home" id="DOMICILE">

  <div class="content">
      <h3> # BESOINS DES STAGAIRES </h3>
      <p>Vous etes une entreprise . vous etes a la recherche d'un stagaire   tappez " Viens Chercher !" pour accetter aux listes des stagires a la recherche d'un stage .</p>
      <a href="#STAGAIRE" class="btn"> Viens Chercher !  <span class="fas fa-chevron-right"></span> </a>
  </div>

  <div class="image">
      <img src="imagpro/Search.gif" alt="" >
  </div>

   </section>

<section style="background-color:#ffffff;"></section>

<section class="blogs" id="blogs">
    <h1 class="heading" id="STAGAIRE"> <span>STAGIAIRES </span> </h1>
    <div class="box-container">
        <?php aff(); ?>
    </div>

</section>


<header class="header">
        <a href="#" class="logo">  EXPRESS TRAINING </a>
        <nav class="navbar">
        <a href="FIRSTPAGE.php">Acceuil</a>
                 <a href="LISTSTAGE.php">Liste des opportunités</a>
                <a href="ENTREPRISE.php">Entreprises</a>
                <a href="STAGAIRE.php">Stagiaires</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
</header>


<section class="footer" id="contact">
    <div class="box-container">

        <div class="box">
            <h3>Liens rapides</h3>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>ACCEUIL</a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i> STATISTIQUES </a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>POUR NOUS SUIVRE</a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>LOCALISATION</a> 
        </div>

        <div class="box" id="contacte">
            <h3>Informations de contact</h3>
            <a href="tel:+212 0606670674"> <i class="fas fa-phone"></i>+212 606670674</a></p>
            <a href="tel:+212 0617702805"> <i class="fas fa-phone"></i>+212 698603484</a></p>
            <a href="mailto:soufianeelbekkali4@gmail.com"><i class="fas fa-envelope"></i> expresstraining4@gmail.com </a></p>
            <a href="mailto:soufiane1337@gmail.com"><i class="fas fa-envelope"></i> expresstraining4@gmail.com </a></p>           
            <a href="https://www.google.com/maps/place/ISMOTICA+F%C3%A8s+OFPPT/@34.0048356,-4.9596405,17z/data=!3m1!4b1!4m5!3m4!1s0xd9f8c60c1efe303:0x33ffaa02926ac298!8m2!3d34.0048312!4d-4.9574518"> <i class="fas fa-map-marker-alt"></i> ifmotica, fes  - maroc  </a>
        </div>

        <div class="box">
            <h3>Suivez-nous</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> FACEBOOK </a>
            <a href="#"> <i class="fab fa-twitter"></i> TWITTER </a>
            <a href="#"> <i class="fab fa-instagram"></i> INSTAGRAM </a>
            <a href="#"> <i class="fab fa-linkedin"></i> LINKEDIN </a>
        </div>
      
    </div>
    <div class="credit">créé par <span></span> | tous les droits sont réservés</div>

</section>

<script>
    /*pour res...*/
          let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }

        window.onscroll = () => {
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        }

   </script>

</body>
</html>