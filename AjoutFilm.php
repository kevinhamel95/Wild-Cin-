<html>
<head>
	<title>Ajouter un film à WildCine</title>
	
	<link rel="stylesheet" href="ChartreGraphique.css"/>
</head>
<?php
include 'conect.php';
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 <li><a href="">Rechercher</a>
  <ul>
	  <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
    </ul></ul>
 <a href="Index.php"><img src="WildCine.png" class="logo" align="right"></a><br>
 
 </div>
 
 <div id ="contenu">
<form action="rechercher.php" method="POST">
<input type="text" placeholder="recherche" name="recherche"><br><br>
</form>
 <form action="AjouterFilm.php" method="POST">
                <h1>Ajouter un Film</h1>
                
                <label><b>Nom</b></label><br>
                <input type="text" placeholder="Nom" name="nom" required><br><br>

                <label><b>Synopsis</b></label><br>
                <TEXTAREA type="text" placeholder="Synopsis" name="synopsis"required></TEXTAREA><br><br>
				
				<label><b>Année de Sortie</b></label><br>
                <input type="number" placeholder="1900" name="anneesortie" min="1895" required><br><br>

</select><br><br>
	<label for="Genre">Genre</label><br />
    <select name="genre" id="genre">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `genre`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['CodeGenre']; ?>"> <?php echo $donnees2['NomGenre']; ?></option>
<?php
}
 
?>
</select><br><br>
	<label for="LangueVO">Langue VO</label><br />
    <select name="languevo" id="Languevo">
 
<?php
 
$sql3= mysqli_query($db,"SELECT * FROM `languevo`");

while($donnees2=mysqli_fetch_assoc($sql3))
{
?>
           <option value="<?php echo $donnees2['CodeLangueVO']; ?>"> <?php echo $donnees2['NomLangueVO']; ?></option>
<?php
}
 
?>
</select><br><br>
	<label for="PaysProd">Pays Production</label><br />
    <select name="paysprod" id="paysprod">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `paysprod`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['CodePaysProd']; ?>"> <?php echo $donnees2['NomPaysProd']; ?></option>
<?php
}
 
?>
</select><br><br>
				<input type="submit" value="Valider">
				
					<?php
				if(isset($_GET['erreur']))
				{
                    $err = $_GET['erreur'];
                    if($err==1)
					{
                        echo "<p style='color:red'>erreur</p>";
					}
                }
				if(isset($_GET['ok']))
				{
					$ok = $_GET['ok'];
					if($ok==1)
					{
						echo "<p style='color:green'>Le film à bien été enregistrer</p>";
					}
				}
					
				?>