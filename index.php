<?php
	$timezone = new DateTimeZone('America/Sao_Paulo');
	$agora = new DateTime('now', $timezone);
	echo $agora;
?>

