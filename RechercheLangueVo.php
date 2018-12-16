<html>
<head>
	<title>Recherche par Langue VO</title>
	<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
	<link rel="stylesheet" href="ChartreGraphique.css" media="screen" type="text/css" charset=UTF-8 />
</head>
<?php
include 'conect.php';
 header('Content-type: text/html; charset=UTF-8');
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 <li><a href="AjoutFilm.php">Ajouter un film</a></li>
  <li><a href="">Rechercher</a>
  <ul>
     <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
	  </li>
    </ul></ul>
 <a href="Index.php"><img src="WildCine.png" align=right></a><br>
 
 </div>
 
 <div id ="contenu">
 <form action="rechercher.php" method="POST">
<input type="text" placeholder="recherche" name="recherche" align=right required><br><br>
</form>
 	 <form action="ListeFilmLangueVO.php" method="POST">
                <h1>Rechercher une Langue VO</h1>
	<label for="LangueVO">Langue VO</label><br />
    <select name="languevo" id="languevo">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `languevo`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['NomLangueVO']; ?>"> <?php echo $donnees2['NomLangueVO']; ?></option>
<?php
}
 
?>
</select><br><br>
<input type="submit" value="Valider">

 </div>
 