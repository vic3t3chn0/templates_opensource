#!/bin/bash

echo -n "Choose one of the options 1:2"
echo "1)Compile website"
echo "2) Run website"

read c

case $c in
		'1') cd new_website
			nanoc
			;;
		'2')	cd new_website 
			nanoc view
			;;
		esac
