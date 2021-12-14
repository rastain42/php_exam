<?php 
require('database.php');
    if (isset($_POST['validate'])){
        if (isset($_POST['concept']) && $_POST['deroulement'] && $_POST['lieu']){
            $question_concept = htmlspecialchars($_POST['concept']);
            $question_deroulement = nl2br(htmlspecialchars($_POST['deroulement'])); 
            $question_lieu = htmlspecialchars($_POST['lieu']);
            $question_date = date('Y-m-d H:i:s');
            $question_id_author = $_SESSION['id'];
            $question_pseudo_author = $_SESSION['pseudo'];

            $insertQuestionOnWebsite = $mysqli->prepare("INSERT INTO questions(concept, deroulement, date, link, pseudo_author, id_author");
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}