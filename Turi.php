<?php

$portion = (int) readline("Hany darab polot vasaroltal: ");

echo "Osszesen fizettel ertuk: ";
if($portion == 1){
	echo"500 FT-ot";
}
elseif ($portion == 2) {
	echo "950 Ft-ot";
}
else{
	echo $portion * 400 + 150 . " Ft-ot";
}

