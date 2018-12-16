<html>
<head>
	<title>Liste Film WildCine</title>
	<link rel="stylesheet" href="ChartreGraphique.css"  />
</head>
<?php
include 'conect.php';
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="AjoutFilm.php">Ajouter un film</a></li>
 <li><a href="#">Rechercher</a>
  <ul>
     <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
    </ul></ul>
 <a href="Principal.php"><img src="WildCine.png" align=right></a><br>
 
 </div>
 
 <div id ="contenu">
 <form action="rechercher.php" method="POST">
<input type="text" placeholder="recherche" name="recherche" align=right required><br><br>
</form>
 <table>
<caption><h4>Liste films</h4></caption>
 <br><br>
            <thead>
            <tr class="titre_horizon_classique">
                <th colspan="6"><h3>Films</h3></th>
				<th colspan="1"><h3>Supprimer</h3></th>
            </tr>
            <tr class="titre_horizon_classique">
                <th>Nom film</th>
                <th>Synopsis</th>
                <th>Année de sortie en salle</th>
                <th>Genre</th>
                <th>Pays de Production</th>
				<th>Langue en version originale</th>
				<th> </th>
            </tr>
            </thead>
<tbody>
<?php
$sql="select `CodeFilm`,`NomFilm`,`Synopsis`,`AnneeSortie`,`NomGenre`,`NomLangueVO`, `NomPaysProd` from film, genre, languevo, paysprod where film.CodeGenre = genre.CodeGenre and film.CodePaysProd = paysprod.CodePaysProd and film.CodeLangueVO = languevo.CodeLangueVO";
$requete = mysqli_query($db,$sql);
while($donnees = mysqli_fetch_array($requete)) 
{
?>
<tr>
</td>
<td><?php echo $donnees['NomFilm'] ?></td>
<td><?php echo $donnees['Synopsis']?></td>
<td><center><?php echo $donnees['AnneeSortie']?></center></td>
<td><?php echo $donnees['NomGenre']?></td>
<td><center><?php echo $donnees['NomPaysProd']?></center></td>
<td><center><?php echo $donnees['NomLangueVO']?></center></td>
<td><form action="SupFilm.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $donnees['CodeFilm']?>"/>
	<input type="submit" name="valider" class="delete" value="Supprimer" />
	</form>
</td>
<?php
}
                if(isset($_GET['erreur']))
				{
                    $err = $_GET['erreur'];
                    if($err==1)
					{
                        echo "<p style='color:red'>echec</p>";
					}
                }
				
				 if(isset($_GET['ok']))
				{
                    $ok = $_GET['ok'];
                    if($ok==1)
					{
                        echo "<p style='color:red'>suppresion reussi</p>";
					}
                }
?>
 
</tbody></table>
</div>