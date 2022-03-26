<?php


/**
* Log dans la console
*
* Passage d'une variable php à la console, utile pour les tests et le débogage
*
* @param Objet $data
*
* @return void
*/
function console_log($data)
{
	echo '<script>console.log(' . json_encode($data)  . ')</script>';
}
?>
