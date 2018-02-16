<?php
function fb($a){
$k=0;
for( $i = 0;$i<19;$i++)
$k=$a[$i]+$k;
 echo $k;}
$a=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18);
fb($a);

