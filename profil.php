<?php  
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
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="css/home.css" />
          <link rel="stylesheet" href="css/navbar.css" />
      </head>  
      <body>  
      <?php include 'navbar.php'?>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3>Bienvenue sur cette page de profil en devenir</h3>  

                <?php  
                echo '<h1>Bienvenue '.$_SESSION["username"].'</h1>';  
                echo '<h1>ID : '.$_SESSION["userId"].'</h1>';   

                ?>  
           </div>  
      </body>  
 </html>  