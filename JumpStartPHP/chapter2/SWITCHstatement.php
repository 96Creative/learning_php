
<?php
$a = 5;
$b = 6;
$c = 7;
$d = 5; // incrase the value of $d

switch ($a) {
    case $b:
        echo 'A equals B';
        break;
    case $c:
        echo 'A equals C';
        break;
    case $d:
        echo 'A equals D';
        break;
    default:
        echo 'A is not equals to anything';
        break;
}
echo "<br />";
?>

<?php
/*
PHP doesn't see the start of one case at the end of the previews case. 
That is why the break is very important. Hovever if we want to execute the
code in multiple cases we can do this.
*/

$a = 5;
$b = 6;
$c = 7;
$d = 5; // incrase the value of $d

switch ($a) {  
// csae execute trough multiple cases
    case $b:
    case $c:
    case $d:
        echo 'A equals B, C, or D';
        break;
    default:
        echo 'A is not equals to anything';
        break;
}
?>