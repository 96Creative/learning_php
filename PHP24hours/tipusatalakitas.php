<?php
/*Ha a valtozo neve ele zarojelben egy adattipust irunk 
akkor a valtozo ertekenek altalunk meghatarozott tipusuva 
alakitott MASOLATAT kapjuk.*/

$a = 3.14;
$b = (integer) $a;
print gettype ($b);
print '<br>';
var_dump($b);

/* Lenyegi kulonbseg tehat hogy a settype()-al ellentetben
tipusatalakitas soran az eredeti valtozo tipusa es erteke 
nem valtozik. Csupan egy masolatot kapunk.*/
?>