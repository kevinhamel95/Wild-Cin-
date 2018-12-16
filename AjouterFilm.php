<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "", "wildcine" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "wildcine" ) ;

$nom=$_POST['nom'];
$synopsis=$_POST['synopsis'];
$anneesortie=$_POST['anneesortie'];
$codegenre=$_POST['genre'];
$codelanguevo=$_POST['languevo'];
$codepaysprod=$_POST['paysprod'];


$sql="insert into film(`CodeFilm`,`NomFilm`,`Synopsis`,`AnneeSortie`,`CodeGenre`,`CodePaysProd`,`CodeLangueVO`) VALUES (null,'$nom','$synopsis','$anneesortie','$codegenre','$codepaysprod','$codelanguevo')";
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
	header('Location: Ajoutfilm.php?ok=1');
  }
  else
  {
	header('Location: AjoutFilm.php?erreur=1');
  }

?>