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
    <body>


<header class="header">
        <a href="#" class="logo">  EXPRESS TRAINING </a>
        <nav class="navbar">
        <a href="FIRSTPAGE.php">Acceuil</a>
                 <a href="STAGAIRE.php">Liste des emplois</a>
                <a href="ENTREPRISE.php">Entreprises</a>
                <a href="STAGAIRE.php">Stagiaires</a>
        <a href="FIRSTPAGE.php"> <button class="btn" type="button" name="S'inscrire"> Deconnecter</button></a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
</header>
   
<section class="book" id="book" style="background-color: #e584cb;">
   <br><br><br><br>

    <h1 class="heading"> <span>Vous êtes une entrepeise</span> </h1>

    <div class="row">

        <div class="image">
            <img src="imagpro/Cohort analysis (1).gif" alt="">
        </div>


        <form action=""  method="POST">
            <h3> S'inscrire  </h3>
            <?php
         $localhost="localhost";
         $username="root";
         $pass="";
         $db="gestionstagaire";
    
            $con=new mysqli($localhost,$username,$pass,$db);
	if (isset($_POST['valider'])) {
        $con = new mysqli("localhost", "root", "", "gestionstagaire");
        $requete="INSERT INTO entrreprise  VALUES(' ". $_POST['nom'] . "', '" . $_POST['email'] . "', '".$_POST['password']."' )";
        $resultat = $con -> query($requete);
        if ($resultat){
            echo "<script> alert('le compte a ete  cree !!!')</script>";
            echo'    <h2><i style=" color:red;" class="fas fa-chevron-right"></i><a style=" color:red;" href="POSTENTREPRISE.php"> Pour faire un post , qulique ici !</a></h2> ';
        }else{
            echo "  <script> alert('eroooore !!!')</script> ";
        }
    }
        ?>
            <pre>
            <input type="text" name="nom" class="box" placeholder="Nom d'entreprise" required><br>
            <input type="email" name="email" class="box"  placeholder="Votre email" required><br>
            <input type="password"  name="password" class="box"  placeholder="Votre mot de passe " required><br>
            <input type="submit" name="valider" class="btn">
           </pre>
        </form>
    </div>
</section>


<section class="footer" id="contact">

    <div class="box-container">
        <div class="box">
            <h3>Liens rapides</h3>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>ACCEUIL</a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i> STATISTIQUES </a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>POUR NOUS SUIVRE</a>
            <a href="FIRSTPAGE.php"> <i class="fas fa-chevron-right"></i>LOCATION</a>
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
            <h3>Pour nous suivre</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> FACEBOOK </a>
            <a href="#"> <i class="fab fa-twitter"></i> TWITTER </a>
            <a href="#"> <i class="fab fa-instagram"></i> INSTAGRAM </a>
            <a href="#"> <i class="fab fa-linkedin"></i> LINKEDIN </a>
        </div>
      

    </div>
    <div class="credit">créé par <span> ...  </span> | tous les droits sont réservés</div>
</section>


<script>
    /*pour resp...*/
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