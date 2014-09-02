

<?php
// FOR LOOP

/* $i has a value, until $i smaller then 101, add +1 to i value.
1, Vriable initialization: $i =1
2, Condition, execute the loop until this condition true: $i < 101
3, An inncrement or decrement: $i = $i +1
4, A block of statement repeat over
*/

for ($i = 1; $i < 101; $i = $i + 1) {
    echo $i . '<br>';
}
?>

<?php
// WHILE LOOP

/* $i has a value, until $i smaller then 101, add +1 to i value.
1, Vriable initialization: $i =1
2, Condition, execute the loop until this condition true: $i < 101
3, A BLOCK OF STATEMENT REPEAT OVER 
4, An inncrement or decrement: $i = $i +1
*/

$i = 1;
while ($i < 101) {
    echo $i . '<br>';
    $i = $i + 1;
}
?>