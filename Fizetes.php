<?php

$salery = (int) readline("Add meg a fizetsed Ft-ban: ");

if ($salery < 200000){
	echo "Fizetesed alacsony";
}
elseif ($salery <= 400000) {
	echo "Fizetesed atlagos";
}
else{
	echo "Fizetesed magas!Gratulalok";
}

