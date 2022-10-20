<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPRESS TRAINING | ADMIN </title>

    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--css link   -->
    <link rel="stylesheet" href="losinstyle.css.css">
    <link rel="icon" href="test.png" sizes="15x15">
</head>

<body>

    <!-- for nav bar header  -->

    <header class="header">

        <a href="#" class="logo"> <i class=" "></i>
            <spam style="color:#641371;">E</spam>XPRESS TRAINING
        </a>

        <nav class="navbar">

        </nav>
    </header>

    <section class="book" id="book" style="background-color:#e584cb;">

    <br><br>
        <div class="row">


            <div class="image">
                <img src="Admin.gif" alt="">
            </div>
            
            <form action="" method="POST">
                                     
   
                <h3 class="login"> Connexion </h3>
                <?php
         $localhost="localhost";
         $username="root";
         $pass="";
         $db="gestionstagaire";
            $con=new mysqli($localhost,$username,$pass,$db);
// test si password correct page S 
if(isset($_POST['envoyer'])){
    $con=new mysqli($localhost,$username,$pass,$db);
  //  $reqconn=" SELECT * FROM  entrreprise WHERE email='".$_POST["email"]."' && password='".$_POST["pasword"]."'";
    $reqconn="SELECT * FROM admiiin WHERE email='".$_POST["email"]."' and password='".$_POST["password"]."'";
    $result= $con->query($reqconn);
    if($result->num_rows > 0) {   
   header ('location:addpost.php');
    }
    else{
       echo '<h1 style="color:red; ">le mot de passe incorrect !!! </h1>';
     // echo '<div class="alert alert-success">add post</div>';
    }
   }
   ?>
                <pre>
            <input type="email"   class="box"  name="email" placeholder="entre votre email "><br>
            <input type="password" class="box" name="password" placeholder="entre votre password "><br>
            <button type="submit" class="btn" name="envoyer"> envoyer  </button>
        </pre>
   
            </form>

        </div>

    </section>







</body>

</html>