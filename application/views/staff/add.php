<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tableau html simple</title>
</head>
<body>

<table border="1">
<?php
// $NbrLigne : le nombre de lignes
//nombre de ligne doit être le nombre des owners

// $NbrCol : le nombre de colonnes
$NbrCol = 5;

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table owner
$request=$bdd->query('SELECT count(*) as nombre FROM owner');
$n = $request->fetch(PDO::FETCH_ASSOC);
$nbrLigne = $n['nombre'];
echo ("hello " .$nbrLigne);


// -------------------------------
?>
   <thead>
	<tr>
<?php
	// ENTETE pour chaque colonne

?>
		<th><?php echo 'Owner name ' ?></th>
		<th><?php echo 'Pet name ' ?></th>
		<th><?php echo 'Check in date ' ?></th>
		<th><?php echo 'Check  out date ' ?></th>
		<th><?php echo 'cost ' ?></th>
<?php

?>
	</tr>
   </thead>

   <tbody>
<?php
$response = $bdd->query('SELECT
								owner_fname, owner_lname,animal_name,check_in,check_out ,stay_price
								FROM owner o , animal a , stays s
								WHERE o.owner_id=s.owner_id AND a.animal_id=s.animal_id');


	// pour chaque ligne
	for ($i=1; $i<=$nbrLigne; $i++)
	{
?>
	<tr>
<?php

		// pour chaque colonne (de la ligne)
		for ($j=1; $j<=$NbrCol; $j++)
		{
?>
		<td><?php echo 'hjh' ?></td>
<?php
		} // end for
?>
	</tr>
<?php
	} // end for
?>
   </tbody>
</table>

</body>
</html>
