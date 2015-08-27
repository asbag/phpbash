#!/bin/bash

read foo
var=$( echo $foo | tr "{a-z}" "{A-Z}" )
echo $var
