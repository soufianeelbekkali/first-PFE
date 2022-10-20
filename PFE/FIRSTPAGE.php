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
            <a  class="logo"> </i>EXPRESS TRAINING  </a>
            <nav class="navbar">
                <!--si qulique sur la button connexion affficher -->
                <div class="popup" id="popup-1">
                    <div class="content">       
                    <div class="close-btn" onclick="togglePopup()">×</div>
                    <form method="POST">
                   <h1 class="con"> Connexion</h1> 
                   <div class="input-field"><input placeholder="Email"   name="email" type="text " class="validate" required></div>
                   <div class="input-field"><input placeholder="mot de passe "   name="password"  type="password" class="validate" required></div>
                               <button class="second-button" name="envoyer" > Connexion </button>
                    </form>
                   </div>
               </div>

                   <?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         $localhost="localhost";
         $username="root";
         $pass="";
         $db="gestionstagaire";
            $con=new mysqli($localhost,$username,$pass,$db);
if(isset($_POST['envoyer'])){
    $con=new mysqli($localhost,$username,$pass,$db);
    $reqconn="SELECT * FROM entrreprise WHERE email='".$_POST["email"]."' and password='".$_POST["password"]."'";
    $result= $con->query($reqconn);
    if($result->num_rows > 0) {   
  header ('location:POSTENTREPRISE.php');
    }else{
        echo '<h1 style="color:red; position:absolute; top:0; left:40%;"  >le mot de passe incorrect !!! </h1>';
    }
   }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['envoyer'])){
    $con=new mysqli($localhost,$username,$pass,$db);
    $reqco="SELECT * FROM stagaire WHERE email='".$_POST["email"]."' and password='".$_POST["password"]."'";
    $result= $con->query($reqco);
   if($result->num_rows > 0) { 
   header ('location:POSTSTAGAIRE.php');
    }else{
        echo '<h1 style="color:red; position:absolute; top:0; left:40%; ">le mot de passe incorrect !!! </h1>';
    }
   }
?>

                       <!--si qulique sur la button sinscriire  affficher -->
                <div class="popup" id="popup-2">
                    <div class="content">       
                    <div class="close-btn" onclick="togglePopupp()">×</div>
                 <h1 class="con">    </h1> 
                 <br>
                 <a href="REGISTREENTREPRISE.php">   <button class="second-button" onclick="togglePopuppp()" >   Entrepeise <span class="fas fa-chevron-right"></span> </button></a> <br>
                 <a href="REGISTRESTAGAIRE.php">     <button class="second-button" onclick="togglePopupppp()">   Stagiaire <span class="fas fa-chevron-right"></span> </button></a>
                </div>
                </div>
                 <!--les elements de navbar -->        
                <a href="FIRSTPAGE.php">Acceuil</a>
                <a href="LISTSTAGE.php">Liste des opportunités</a>
                <a href="ENTREPRISE.php">Entreprises</a>
                <a href="STAGAIRE.php">Stagiaires</a>
               <a>
                <button onclick="togglePopup()" class="btnn" >Connexion</button>
                <button onclick="togglePopupp()" class="btnn" > S'inscrire </button>
               </a>
                
              </nav>
              <!-- pour menu vtn pour responsive desing-->
            <div id="menu-btn" class="fas fa-bars"></div>
        </header>


<section class="home" id="DOMICILE">
    <div class="image">
        <img src="imagpro/Code review (2).gif"  alt="">
    </div>

    <div class="content">
        <h3>BIEN CHERCHER POUR BIEN TROUVER </h3>
        <p>Vous êtes à la recherche d'un stage ou d'un stagiaire , " EXPRESS TRAINING " vous offre une expérience sur mesure dans votre recherche d'emploi .</p>
        <a href="#contact" class="btn"> contact <!-- flech de conntacte ->  --> <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<h1 class="heading" id="STATISTIQUE">  <span> Statistiques</span> </h1>
<section class="icons-container">
    <!-- code js  -->
    <div class="icons">
   
        <h3>76+</h3>
        <p>Entreprises </p>
    </div>

    <div class="icons">
        <h3>101+</h3>
        <p>Stagiaires</p>
    </div>

    <div class="icons">
        <h3>230+</h3>
        <p>Visiteurs</p>
    </div>
    
</section>

<section class="suivre" id="CONTACTE">

    <h1 class="heading">  <span>   Pour Nous SUIVRE</span> </h1>
   
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="imagpro/Mobile Marketing (2).gif" alt="">
            </div>
         
            <div class="share">
             <!-- pour les lien de inst fb ... -->
                <a href="" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>					
        </div>
    </div>
</section>


<section class="book" id="LOCALISATION">
    <h1 class="heading"> <span></span> Localisation </h1>    
    <div class="row">
        <div class="image">
            <img src="imagpro/Location tracking.gif" alt="">
        </div>
        <form action="" class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5209857622144!2d-4.959640485445964!3d34.00483562767566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8c60c1efe303%3A0x33ffaa02926ac298!2sISMOTICA%20F%C3%A8s%20OFPPT!5e0!3m2!1sfr!2sma!4v1645905911171!5m2!1sfr!2sma" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </form>
        </div>
</section>


<section class="footer" id="contact">

    <div class="box-container">

        <div class="box">
            <h3>Liens rapides</h3>
            <a href="#DOMICILE"> <i class="fas fa-chevron-right"></i>ACCEUIL</a>
            <a href="#STATISTIQUE"> <i class="fas fa-chevron-right"></i> STATISTIQUES </a>
            <a href="#CONTACTE"> <i class="fas fa-chevron-right"></i>POUR NOUS SUIVRE</a>
            <a href="#LOCALISATION"> <i class="fas fa-chevron-right"></i>LOCALISATION</a>
            
        </div>

        <div class="box" id="contacte">
            <h3>Informations de contact</h3>
            <a href="tel:+212 0606670674"> <i class="fas fa-phone"></i>+212 606670674</a></p>
            <a href="tel:+212 0617702805"> <i class="fas fa-phone"></i>+212 698603483</a></p>
            <a href="mailto:soufianeelbekkali4@gmail.com"><i class="fas fa-envelope"></i> expresstraining4@gmail.com </a></p>
            <a href="mailto:soufiane1337@gmail.com"><i class="fas fa-envelope"></i> expresstraining4@gmail.com </a></p>
            <a href="https://www.google.com/maps/place/ISMOTICA+F%C3%A8s+OFPPT/@34.0048356,-4.9596405,17z/data=!3m1!4b1!4m5!3m4!1s0xd9f8c60c1efe303:0x33ffaa02926ac298!8m2!3d34.0048312!4d-4.9574518"> <i class="fas fa-map-marker-alt"></i> ifmotica, fes  - maroc  </a>
        </div>

        <div class="box">
            <h3>Pour nous suivre</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> FACEBOOK </a>
            <a href="#"> <i class="fab fa-twitter"></i> TWITTER </a>
            <a href="#"> <i class="fab fa-instagram"></i> INSTAGRAM </a>
            <a href="#"> <i class="fab fa-linkedin"></i> LINKEDIN</a>
        </div>
    </div>

    <div class="credit">créé par <span>...</span> | tous les droits sont réservés</div>
</section>

<script>
   //script buuton de connexion 
    function togglePopup() {
    document.getElementById("popup-1")
     .classList.toggle("active");
   }

    //script buuton de connexion 
    function togglePopupp() {
    document.getElementById("popup-2")
     .classList.toggle("active");
   }
   let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}



   </script>
    </body>
</html>