<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EXPRESS TRAINING | ADMIN </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!--
  Customized Bootstrap Stylesheet
             CG3
-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href=" assets/css/sstyle.css" rel="stylesheet">
    <!-- jquery file-->
    <link rel="icon" href="test.png" sizes="15x15">
    <script src="assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/jquery/jquery-3.6.0.js"></script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
           <!-- Sidebar Start -->
           <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="" class="navbar-brand mx-4 mb-3">

                <h3 id="A" class="text-primary" >     <span style="color:#470f50;"><br> EXPRESS  </span> <span style="color:#e584cb;"><br><span> </span> TRAINING </span> </h3>
            
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative"> 
                    </div>
                    
                </div>
                <div class="navbar-nav w-100 ">
                <a href="addpost.php" class=" nav-item nav-link  "><i class="fa fa-keyboard me-2 "></i></i> Ajouter Une offre</a>
                <a href="voiroffre.php" class="nav-item nav-link "><i class=" far fa-file-alt me-2 "></i> voir les offre </a>
                    <a href="infoentreprise.php" class="nav-item nav-link "><i class="fa fa-chart-bar me-2 "></i> Info  Entreprise</a>
                    <a href="infostagaire.php" class="nav-item nav-link  "><i class="fa fa-chart-bar me-2 "></i> Info Stagaires</a>
                    <a href="ajouterunadmin.php" class="nav-item nav-link active "><i class="fa fa-keyboard me-2 "></i>Jouter Un admin</a>
                    <a href="viewadmin.php" class="nav-item nav-link "><i class=" far fa-file-alt me-2 "></i>Voir Les Adminn </a>
               </nav>
            </div>
        </div>




        <!-- Content Start -->
        <div class="content ">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 ">
                <a href="index.php " class="navbar-brand d-flex d-lg-none me-4 ">
                    <h2 class="text-primary mb-0 "></h2>
                </a>


                <div class="navbar-nav align-items-center ms-auto ">
                    <div class="nav-item dropdown ">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0 "> </div>
                    </div>

                    <div class="nav-item dropdown "> </div>


                    <div class="nav-item dropdown ">
                    <h4>   <a href="loginpage.php"  style="color:red;" class="dropdown-item">Se déconnecter</a> </h4>
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0 ">
                        </div>
                    </div>
                </div>
            </nav>




            <!-- form start -->
            <div class="container-fluid pt-4 px-4 ">
                <div class="bg-light text-center rounded p-4 ">
                    <div class="d-flex align-items-center justify-content-between mb-4 ">
                        <h6 class="mb-0 "> </h6>
                    </div>
                    <div class="table-responsive ">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 ">

                            <div class="col-sm-12 col-xl-6 ">
                                <div class="bg-light rounded h-100 p-4 ">
                                    <h6 class="mb-4 " style="color:#e584cb; "> AJOUTER UN ADMINISTRATEUR </h6>
                                    <!--form  -->
                                    <form action=""  method="POST">
                                    <?php
         $localhost="localhost";
         $username="root";
         $pass="";
         $db="gestionstagaire";
    
            $con=new mysqli($localhost,$username,$pass,$db);
  
              //ajouter 
	if (isset($_POST['valider'])) {
        $con = new mysqli("localhost", "root", "", "gestionstagaire");
        $requeteadmin="INSERT INTO admiiin  VALUES(' ". $_POST['name'] . "', '" . $_POST['email'] . "', '".$_POST['password']."' )";
        $resultatadmin = $con -> query($requeteadmin);
      //petit test 
       if ($resultatadmin){
        echo '<div class="alert alert-success"> Admin a ete ajouter !</div>'; 
        }else{
            echo '<div class="alert alert-danger">add post</div>'; 
        }
    }
 ?>
                                        <!-- for taost success -->
                                        <div class="row mb-3 ">
                                            <label for="inputEmail3 " class="col-sm-2 col-form-label ">Name </label>
                                            <div class="col-sm-10 ">
                                                <input type="text " class="form-control " name="name" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3 ">
                                            <label for="inputEmail3 " class="col-sm-2 col-form-label ">Email </label>
                                            <div class="col-sm-10 ">
                                                <input type="email " class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3 ">
                                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Mot de Passe </label>
                                            <div class="col-sm-10 ">
                                                <input type="password " class="form-control" name="password"  required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btnn" name="valider" >envoyer  </button>
                                    </form>
                                </div>

                            </div>
                            <!-- form end -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- php insert -->











            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4 ">
                <div class="bg-light rounded-top p-4 ">
                    <div class="row ">
                        <div class="col-12 col-sm-6 text-center text-sm-start ">
                            &copy; <a href="# " style="color:#e584cb; ">EXPRESS TRAINING</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->





    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js "></script>
    <script src="lib/chart/chart.min.js "></script>
    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/waypoints/waypoints.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>
    <script src="lib/tempusdominus/js/moment.min.js "></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js "></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js "></script>
    <!-- toster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js "></script>
    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>