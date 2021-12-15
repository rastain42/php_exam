<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Accueil</title>  
      </head>  
      <body>  
      <?php include 'navbar.php'?>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3>Bienvenue sur cette page d'acceuil en travaux</h3>  
                <br />  
                <?php  
                echo '<h1>Bienvenue '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>  
      </body>  
 </html>  