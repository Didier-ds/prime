<?php session_start(); ?>
<?php ob_start(); ?>
<?php require_once("../includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard || Admin Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="js/all.min.js"></script>
        <script src="js/feather.min.js"></script>
        <style>
            			@import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');

            .signature_preview {
			/* border:1px solid grey;  */
			font-size: 5em;
			color: #033333;
			border-radius: 5px; 
			font-family: 'Sacramento', cursive;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: .8em;
			 margin: 0 auto;
			  box-shadow: 0 1px 22px rgb(157 184 209 / 19%) 
		} 
		@media (min-width: 768px) {
			.signature_preview{width: 50%;}
		}
        </style>
    </head>

<?php
    if(isset($_SESSION['login'])) {
        // it's ok
    } else {
        header("Location: ../index.php");
    }
?>