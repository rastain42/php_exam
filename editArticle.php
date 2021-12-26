<?php  
 session_start();  
 if(!isset($_SESSION["username"])){  
    header("location:index.php?action=login");  
 }  

 include 'dbConnect.php';
 $mysqli= $_SESSION['mysqli'];
 if(isset($_GET['id'])){
    $result = $mysqli->query("SELECT * FROM `events` WHERE Id = ".$_GET['id']);
    $row = $result->fetch_array(MYSQLI_ASSOC);
 }


 if(isset($_POST["edit"])){  
    if(isset($_POST["username"])){  
        $username = mysqli_real_escape_string($mysqli, $_POST["username"]);  
        if(strlen($username) > 60){
            echo '<script>alert("on a dit max 60char !")</script>'; 
        }else{
            if (!$mysqli->query("UPDATE `users` SET `Username` = \"".$username."\" WHERE `users`.`Id` = ".$_SESSION['userId'])) {
                echo "Error updating username: " . $mysqli->error;
            }
        }
    }
    if(isset($_POST["email"])){
        $email = mysqli_real_escape_string($mysqli, $_POST["email"]);  
        if (!$mysqli->query("UPDATE `users` SET `Email` = '".$email."' WHERE `users`.`Id` = ".$_SESSION['userId'])) {
            echo "Error updating email: " . $mysqli->error;
        }

    }
    if (isset($_POST["email"]) || isset($_POST["username"])) {
        header("location:profilEdit.php");
    }else {  
        echo '<script>alert("WTF?, y\'a rien d\'écrit !")</script>';  
    }    
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
    <link rel="stylesheet" href="css/profilEdit.css" />
    <link rel="stylesheet" href="css/navbar.css" />
 </head>  
 <body>  
    <?php include 'navbar.php'?>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" alt width="200px" height="200px"  src="<?php echo $ProfilPic ?>">
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-right" style="color:black">Modification du profil</h3>
                    </div>
                    <form method="post"> 
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Pseudonyme :</label><input type="text" class="form-control" placeholder="<?php echo $row['Username'] ?>" name="username"></div>
                            <div class="col-md-12"><label class="labels">Adresse email :</label><input type="text" class="form-control" placeholder="<?php echo $row['Email'] ?>" name="email"></div>
                            <div class="mt-3 text-center" style="width:100%"><button class="btn btn-primary profile-button" type="submit" name="edit">Sauvegarder ces infos</button></div>
                        </div>
                    </form>
                    <form method="post"> 
                        <div class="row mt-5 ml-3">
                            <h5 class="text-right" style="color:black">Modification du mot de passe</h5>
                            <div class="col-md-6"><label class="labels">Nouveau mot de passe :</label><input type="password" class="form-control" placeholder="..." name="password"></div>
                            <div class="col-md-6"><label class="labels">Confirmation :</label><input type="password" class="form-control" placeholder="..." name="passwordConfirm"></div>
                            <div class="mt-3 text-center" style="width:100%"><button class="btn btn-primary profile-button" type="submit" name="editMDP">Sauvegarder le mot de passe</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>  
</html>  