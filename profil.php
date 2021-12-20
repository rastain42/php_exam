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
          <link rel="stylesheet" href="css/profil.css" />
          <link rel="stylesheet" href="css/navbar.css" />
     </head>  
     <body>  
          <?php include 'navbar.php'?>
          <?php
          $mysqli = new mysqli("localhost", "admin", "PassWord!", "php_exam_db");
          $result = $mysqli->query($request ="SELECT * FROM users WHERE Id = 1");
          while ($ligne = $result -> fetch_assoc()) {
          echo $ligne['Username'] . ' ' . $ligne['Email'] . ' ' . $ligne['RegisterDate'] . ' ';
    }
    ?>
    <section class="section about-section gray-bg" id="about">
         <div class="parametre">
               <a href="profilEdit.php">
               <svg class="iconparametre" xmlns="http://www.w3.org/2000/svg" width="42" height="43.178" viewBox="0 0 42 43.178">
                    <path id="ic_settings_24px" d="M39.316,25.7a16.824,16.824,0,0,0,.151-2.116,16.826,16.826,0,0,0-.151-2.116l4.555-3.562a1.089,1.089,0,0,0,.259-1.382L39.813,9.06A1.085,1.085,0,0,0,38.5,8.585L33.12,10.744a15.773,15.773,0,0,0-3.649-2.116l-.82-5.721A1.053,1.053,0,0,0,27.593,2H18.958a1.053,1.053,0,0,0-1.058.907l-.82,5.721a16.587,16.587,0,0,0-3.649,2.116L8.055,8.585a1.053,1.053,0,0,0-1.317.475L2.42,16.529a1.064,1.064,0,0,0,.259,1.382l4.555,3.562a17.121,17.121,0,0,0-.151,2.116A17.121,17.121,0,0,0,7.235,25.7L2.679,29.267a1.089,1.089,0,0,0-.259,1.382l4.318,7.47a1.085,1.085,0,0,0,1.317.475l5.376-2.159a15.773,15.773,0,0,0,3.649,2.116l.82,5.721a1.053,1.053,0,0,0,1.058.907h8.636a1.053,1.053,0,0,0,1.058-.907l.82-5.721a16.587,16.587,0,0,0,3.649-2.116L38.5,38.594a1.053,1.053,0,0,0,1.317-.475l4.318-7.47a1.089,1.089,0,0,0-.259-1.382Zm-16.041,5.44a7.556,7.556,0,1,1,7.556-7.556A7.564,7.564,0,0,1,23.275,31.145Z" transform="translate(-2.271 -2)"/>
               </svg>
               </a>
</div>
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                            <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>Canada</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label <?php
                                        $Id = 
                                        $result = $mysqli->query($request ="SELECT Email FROM users WHERE Id = 1");
                                        echo $result;
                                        ?>>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
     </body>  
</html> 