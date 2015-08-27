#!/usr/bin/php

<?php
/**
* @author David Mezquíriz Osés
*/

echo "argv values\n";
var_dump($argv);

parse_str(implode('&', array_slice($argv, 1)), $_GET);

echo "\n _GET values \n";
var_dump($_GET);

?>
