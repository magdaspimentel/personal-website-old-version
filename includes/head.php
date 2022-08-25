<?php session_start();

	$currentPage = basename($_SERVER["PHP_SELF"]);

    if(!isset($_SESSION["lang"])) {

        $_SESSION["lang"] = "pt";
    }

    if(isset($_GET["lang"])) {

        if($_GET["lang"] == "pt") {

            $_SESSION["lang"] = "pt";

        }

       	elseif($_GET["lang"] == "en") {

            $_SESSION["lang"] = "en";

        }

    }

    switch ($_SESSION["lang"]) {

        case 'pt':
        include "languages/pt.php";
        break;

        case 'en':                
        include "languages/en.php";
        break; 
                
    }    
     
?>


<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Magda Pimentel">
                
        <?php include 'includes/seo.php'; ?>

        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">  
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">      
        <link rel="stylesheet" type="text/css" href="css/styleV1.min.css">
    </head>

    <body>  	   