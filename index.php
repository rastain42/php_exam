<?php
	$hello = "World";
    $mysqli = new mysqli("localhost", "root", "root", "php_exam");
    $result = $mysqli->query("SELECT * FROM users");
?>
<h1>Hello <?php echo $hello ?> !</h1> 

