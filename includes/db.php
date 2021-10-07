<?php 
       $dbn = "mysql:host=localhost;dbname=primetown";
       $user = 'root';
       $pass = '';
       try {
           $pdo = new PDO($dbn, $user, $pass);
       }
       catch(PDOException $e) {
           echo $e->getMessage();
       };
?>