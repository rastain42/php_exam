<?php
 $connect = mysqli_connect("localhost", "admin", "PassWord!", "php_exam_db");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["email"]) )  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  

           $query = "INSERT INTO Users (Username, Password, Email, RegisterDate, AuthorityLevel) VALUES('$username', '$password', )";  
           if(mysqli_query($connect, $query)){  
                echo '<script>alert("Registration Done")</script>';  
           } else{
                echo '<script>alert("Registration Error, Respecte le formulaire !")</script>'; 
           }
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  {  
                $_SESSION['username'] = $username;  
                header("location:entry.php");  
           }  
           else{  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Welcome To ProjetX</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Bienvenue sur notre site, Projet X est un site répertoriant les soirées du coin</h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Connexion</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Inscription</h3>  
                <br />  
                <!-- (Username, Password, Email, RegisterDate, AuthorityLevel) -->
                <form method="post">  
                     <label>Pseudo : (max 60 caractères)</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Email : (max 320 caractères)</label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />  
                     <label>Mot de passe :</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Inscription" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php?action=login">Login</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  