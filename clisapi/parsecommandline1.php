#!/usr/bin/php

<?php
/**
* @author David Mezquíriz Osés
*/

//Get rid of first field (command)
array_shift($argv);

$i = 0;
while ($args = array_shift($argv)) {
	++$i;
	echo "Argument $i is : $args\n";
}

?>
