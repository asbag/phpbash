#!/usr/bin/php
<?php
/**
*@author David Mezquíriz Osés
*/

fputs(STDOUT, "\nThe amazing favourite color script\n");
fputs(STDOUT, "\nWhat is your favourite colour? ");

$sometext = strtolower(trim(fgets(STDIN, 256)));
fputs(STDOUT, "Your favourite colour is $sometext\n\n");
?>
