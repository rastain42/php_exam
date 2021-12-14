<?php
 $connect = mysqli_connect("localhost", "admin", "PassWord!", "php_exam_db");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:home.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["email"]) )  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else{
            $username = mysqli_real_escape_string($connect, $_POST["username"]);
            if(strlen($username) > 60){
                echo '<script>alert("on a dit max 60char !")</script>'; 
            }
            $password = mysqli_real_escape_string($connect, $_POST["password"]);  
            $password = md5($password);  
            
            require_once 'VerifyEmail.class.php'; 
            $mail = new VerifyEmail();
            $email = mysqli_real_escape_string($connect, $_POST["email"]); 

            // Check if email is valid and exist
            if($mail->check($email)){ 
                $ok = true;
            }elseif(verifyEmail::validate($email)){ 
                echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
                $ok = false;
            }else{ 
                echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
                $ok = false;
            } 

            $registerDate = date("Y-m-d");
            $authorityLevel = 1;
           $query = "INSERT INTO Users (Username, Password, Email, RegisterDate, AuthorityLevel) VALUES('$username', '$password', '$email', '$registerDate', '1')";  
           if(mysqli_query($connect, $query) && $ok){  
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
           $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  {  
                $_SESSION['username'] = $username;  
                header("location:home.php");  
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