
<?php
/*
1, $myArray gets its value
2, foreach goes through all of $myArray values and store them in $value variable
3, print the values on the screen
*/
$myArray = array('hello', 'world');
foreach ($myArray as $value) {
    echo $value . '<br>';
}
?>

<?php
$myArray = array('1 => hello', '2 = world');
    foreach ($myArray as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
?>