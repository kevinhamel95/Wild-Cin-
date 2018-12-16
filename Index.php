<html>
<head>
	<link rel="stylesheet" href="ChartreGraphique.css" media="screen" type="text/css" charset=UTF-8 />
	<title> WildCine </title>
</head>
<?php
include 'conect.php'; // inclure le fichier de connexion à la base pour éviter de repeter le code
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
  <li><a href="#">Rechercher</a>
  <ul>
      <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
	  </li>
    </ul>
 <li><a href="AjoutFilm.php">Ajouter un Film</a></li>
<img src="WildCine.png" align=right></a><br>
 </div>
 
 <div id ="contenu">
<form action="rechercher.php" method="POST">
<input type="text" placeholder="recherche" name="recherche" align=right required><br><br>
 <center>
 <br><h1>Bienvenue sur le site de WildCiné.</h1><br>
 <h3>voici une liste de 5 film au hasard :</h3> <br><br>
 <?php
 $sql="select `NomFilm` from film order by rand() limit 0,5"; // requete pour chosir 5 titre de film au hazard
  $requete = mysqli_query($db,$sql);
  while ($row = mysqli_fetch_array($requete))
  {
    echo $row[0].'<br><br>';
  }
 ?>
 </div>