<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Publies ta soirée ! </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/publish-question.css" />
</head>

<body>
    <?php include 'navbar.php'?>
<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Projet X</h2>
		<p class="hint-text">Publies ta soirée ! </p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="concept" placeholder=" Le concept de la soirée ?" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="textarea" class="form-control" name="deroulement" placeholder="Déroulement de la soirée ?" required="required">
        </div>
		<div class="form-group">
        </div>
		<div class="form-group">
        <input type="textarea" class="form-control" name="lieu" placeholder="Le lieu ?" required="required">
        </div>        
        <label for="meeting-time">choisis l'heurrrrrre, dateee</label>

        <input type="datetime-local" id="meeting-time"
            name="meeting-time" value="2021-06-12T19:30"
            min="2021-06-07T00:00" max="2021-06-14T00:00">

             <br> <br>
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> j'accepte les conditions imposés <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Publier ma soirée !</button>
        </div>
    </form>
	<div class="text-center"> Bon bah Bonne soirée ! <a href="#"></a></div>
</div>
</body>
</html>
