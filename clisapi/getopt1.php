#!/usr/bin/php
<?php
/**
* David Mezquíriz Osés
* Usage: ./getopt1.php -a -b hello -d world
*/

if ($argc == 1) {
	echo "Usage: ./getopt1.php -a -b hello -d world";
	exit;
}
$options = getopt("ab:cd:");

var_dump($options);
?>
