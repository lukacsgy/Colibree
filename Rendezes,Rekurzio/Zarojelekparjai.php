<?php

/* 
Írj rekurzív programot, amelyik egy nyitó zárójellel kezdődő sztringben megtalálja a zárójel bezáró párját.
(A zárójelek (egymásba () lehetnek)) ágyazva.Írd meg ugyanezt iteratívan is!
 */

$string = readline("Add meg a szovget: ");

for ($i = 0; $i < strlen($string); $i++){
	
}

function findTheBracket($string, $i = 0){
	
	if($string[$i] != ")"){
		return findTheBracket($string, $i + 1);	
	}
	
	return $i;
}
