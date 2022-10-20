<?php
         $localhost="localhost";
         $username="root";
         $pass="";
         $db="gestionstagaire";
            $con=new mysqli($localhost,$username,$pass,$db);

                $delete="DELETE FROM post_entreprise WHERE email='" . $_POST["email"] . "'";
                 $resultat=$con->query($delete);
?>