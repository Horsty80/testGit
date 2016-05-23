<?php
// Déclaration des paramètres de connexion
$host = localhost;

// Généralement la machine est localhost
// c'est-a-dire la machine sur laquelle le script est hébergé

$user = root;

$bdd = test;

$passwd  = sirius;

// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");

mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");

// Creation et envoi de la requete
$query = "SELECT * FROM test";

$result = mysql_query($query);

// Recuperation des resultats
while($row = mysql_fetch_row($result)){
$id = $row[0];
$Nom = $row[1];


echo "<tr>\n
<td>$id</td>\n
<td>$Nom</td>\n
</tr>\n";

}

// Deconnexion de la base de donnees
mysql_close();

?>