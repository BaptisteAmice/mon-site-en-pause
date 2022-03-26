<?php

//connection à la bdd
function connex()
{

	$serveur="*";
	$base="*";
	$user="*";
	$mdp="*";

	try
	{
		$dbh = new PDO("mysql:host=$serveur;dbname=$base",$user,$mdp);

		//$dbh->exec('USE ');
     

	}
	catch(PDOException $e)
	{
		print "Erreur de connexion à la bdd!: " . $e->getMessage() . "<br/>";
		die();
	}
	return $dbh;
}

?>
