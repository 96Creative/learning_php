<?php
$any = 3.15;
print gettype($any); // check variable type
settype ($any, int);
print "<br />";
var_dump ($any); // check variable type and value
?>