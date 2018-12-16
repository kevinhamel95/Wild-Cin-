<html>
<head>
	<title>Recherche par Pays Production</title>
	<link rel="stylesheet" href="ChartreGraphique.css"/>
</head>
<?php
include 'conect.php';
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 <li><a href="AjoutFilm.php">Ajouter un film</a></li>
  <li><a href="">Rechercher</a>
  <ul>
      <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
	  </li>
    </ul></ul>
	
 <a href="Index.php"><img src="WildCine.png" align=right></a><br>
 
 
 
 </div>
 
 <div id ="contenu">
 <form action="rechercher.php" method="POST">
<input type="text" placeholder="recherche" name="recherche" align=right required><br><br>
</form>
 	 <form action="ListeFilmPaysProd.php" method="POST">
                <h1>Rechercher un Pays de production</h1>
	<label for="paysprod">Pays de Production</label><br />
    <select name="paysprod" id="paysprod">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `paysprod`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['NomPaysProd']; ?>"> <?php echo $donnees2['NomPaysProd']; ?></option>
<?php
}
 
?>
</select><br><br>
<input type="submit" value="Valider">