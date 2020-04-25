<?php
function acak(){
$kar  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
$kar2 = strlen($kar) - 1;
return substr($kar, rand(0,$kar2),4);
}
for ($i=0; $i <4 ; $i++) { 
 	for ($j=0; $j <4 ; $j++) { 
 		echo "-";
 		echo acak();
 	}
 	echo "<br>";
 } 