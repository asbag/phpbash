<?php

$cmd = realpath(dirname(__FILE__)) . '/bash1.sh';

echo 'Execution of ' . $cmd . ' command';
$result = shell_exec($cmd);
echo $result;