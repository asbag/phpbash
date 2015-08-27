#!/bin/bash

echo "Please enter type of fruit "
read fruit

if [ $fruit = apple ]; then
	echo "Good, I like apples"
elif [ $fruit = orange ]; then
	echo "Good, I like oranges"
elif [ $fruit = pear ]; then
	echo "Good, I like pears"
else
	echo "Oh no, I don't like apples"
fi
