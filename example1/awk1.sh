#!/bin/bash

read pname
ps -ef | awk -v p=${pname} '$8 ~ p { print $2 }'
