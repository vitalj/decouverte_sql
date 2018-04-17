<?php
try{
$bdd=new PDO('mysql:host=localhost;dbname=acs','root','');
}
catch (Exeption $e)
{
die('Erreur: '.$e-> getMessage());
}

$reponse=$bdd->query('SELECT departement.LastName, departement.departement_nom FROM departement, liste_acs WHERE departement.LastName = liste_acs.LastName');

while($donnes= $reponse->fetch())
{
?>

<p> <strong>Utilisateur:</strong></p>
<?php echo ' <strong> Nom: </strong> '.$donnes['LastName'].' <strong> Departement: </strong> '.$donnes['departement_nom'];



}

?>
