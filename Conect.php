<?php
  // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'wildcine';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
	mysqli_set_charset($db, "utf8");
	header('Content-type: text/html; charset=UTF-8');
 ?>   