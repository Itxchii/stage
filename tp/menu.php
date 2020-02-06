
<!D0CTYPE html>
<html lang="fr" >
          <head>
                 <meta charset="UTF-8" />
                 <link rel="stylesheet" href="jap.css"/>
				 
<title>MENU</title>
</head><div id="menu">
<ul id=menu-ul>
</style>
<head>
<li><h2> <a href="crea.html" style="color:white;" >Créer Votre Compte</a></h2></li>
<li><h2><a href="co.html" style="color:white;">Connexion</a></h2></li>
</div>
</ul>
</div>
</head>
<body>
	<?php

/*

connexion à la base de données

*/

try

{

	$bdd = new PDO('mysql:host=localhost;dbname=azerty;charset=utf8', 'root', 'madara42');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>



AFFICHER DONNEES BDD
<?php 


// On récupère tout le contenu de la table Etudiant

	$reponse = $bdd->query('SELECT * FROM Tutent');


	// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

echo  $donnees['nomTut'] ;

}

?>


 </body>
 
</html>