<?php

$charter = readline("Addj meg egy karaktert: ");

if((ord($charter) >= 48) && (ord($charter) <=57)){
	echo "Ez egy szám!";
}
elseif ((ord($charter) >= 65) && (ord($charter) <= 91)) {
	echo "Ez egy nagy betű!";
}
elseif ((ord($charter) >= 97) && (ord($charter) <= 123)) {
	echo "Ez egy kis betű!";
}
else{
	echo "Ez egyébb karakter!";
}