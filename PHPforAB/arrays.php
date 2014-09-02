<?php
$entry = array (
    'title' => 'Sample title',
    'date' => '07 May, 2014',
    'author' => 'Zsolt Papp',
    'body' => 'I am learning PHP',
    );
?>


<?php
echo $entry['title'] . '<br />';
echo $entry['date'] . '<br />';
echo $entry['author'] . '<br />';
echo $entry['body'] . '<br />';
?>

<?php
/* Arrays can also index information automatically using a numeric index
that starts at 0. Create an automatically indexed array just need to
ommitting the keys when create the array.*/

$entry = array ('Sample title', '07 May, 2014', 'Zsolt Papp', 'I am learning PHP');
    
    echo $entry[0], ' by ' , $entry[2];
    
//In programming counts generally start at 0 not 1
?>

<?php
/*When using arrays in string an additional step MUST taken to avoid errors.
MUST wrap the array variable  and key pair in curly braces.*/

$person = array('name' => 'Jason', 'age' => '23');
echo '<br>';
echo "This person's name is {$person['name']} and he is {$person['age']}";

?>

<?php
// Multidimensional arrays can store arrays in an other array.

$people = array(
    array('name' => 'Jason', 'age' => '23'), // $people[0]
    array('name' => 'Carl', 'age' => '32') // $people[1]
    );
    echo '<br>';
    echo "{$people [0]['name']} has a brother. His name is {$people [1]['name']}. 
    Hi is {$people [1]['age']} years old.";
?>

<?php
// Multidimensional arrays can also store multiple STRING literal keys.

$color = array(
    'fruits' => array('apple' => 'red', 'plum' => 'purple'),
    'flowers' => array('rose' => 'red', 'violet' => 'blue')
    );
    echo '<br>';
    echo "An apple is {$color ['fruits']['apple']}
    and a violet is {$color ['flowers']['violet']}.";
?>