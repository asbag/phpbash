<?php

$cmd = realpath(dirname(__FILE__)) . '/readvariables.sh';

$result = shell_exec($cmd);
echo $result;
