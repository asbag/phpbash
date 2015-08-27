#!/bin/bash

read pname
ps -ef | grep -v grep | grep $pname | awk '{print $2}'
