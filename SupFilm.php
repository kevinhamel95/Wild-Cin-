<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "", "wildcine" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "wildcine" ) ;
  
$id=$_POST['id'];
$sql="DELETE FROM `film` WHERE `CodeFilm`='$id'";
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
	header('Location: ListeFilm.php?ok=1');
  }
  else
  {
	header('Location: ListeFilm.php?erreur=1');
  }

?>