<?php

/*
  Írj rekurziót használó programot, amely beolvassa a szabványos bemenetén érkező karaktersorozatot,
  és visszafelé írja ki azt! A program ne használjon tömböket! */

$string = readline("Add meg a szoveget: ");
echo contraiwise($string, strlen($string));

function contraiwise($string, $stringLength) {

	if ($stringLength > 0) {
		echo $string[$stringLength - 1];
		return contraiwise($string, $stringLength - 1);
	}
}

//for ($i = strlen($string) - 1; $i >= 0; $i--){
//	echo $string[$i];
//