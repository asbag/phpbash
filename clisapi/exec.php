#!/usr/bin/php
<?php
/**
* @author David Mezquíriz Osés
*/

echo ("exec command\n");
echo exec('ls -laF\n') . "\n";
echo ("shell_exec command\n");
echo shell_exec('ls -laF\n') . "\n";

echo ("passthru sends directly to output\n");
echo passthru('ls -laF\n') . "\n";
?>
